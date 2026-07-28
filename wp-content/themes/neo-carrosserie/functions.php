<?php
if ( ! defined('ABSPATH') ) exit;

function neo_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form','gallery','caption','style','script'));
    register_nav_menus(array('primary' => 'Menu principal'));
}
add_action('after_setup_theme', 'neo_theme_setup');

function neo_theme_assets() {
    $u = get_template_directory_uri();
    // Polices du design
    wp_enqueue_style('neo-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', array(), null);
    // Styles de base (version = date de modif -> cache navigateur sûr, auto-busté aux mises à jour)
    $dir = get_template_directory();
    wp_enqueue_style('neo-base', $u . '/assets/base.css', array(), @filemtime($dir . '/assets/base.css') ?: '0.1');
    // Scripts fonctionnels (avant/après)
    // Composant avant/après : uniquement sur la page Services (evite ~650 lignes de JS inutiles ailleurs)
    if ( is_page('services') ) {
        wp_enqueue_script('neo-image-slot', $u . '/assets/image-slot.js', array(), @filemtime($dir . '/assets/image-slot.js') ?: '0.1', true);
    }
    // Ancien widget chat maison retiré (on utilise Tawk.to)
    // wp_enqueue_script('neo-chat', $u . '/assets/chat-widget.js', array(), '0.1', true);
    // i18n client-side retiré : la traduction est gérée par TranslatePress (URLs /de/)
    // wp_enqueue_script('neo-i18n', $u . '/assets/neo-i18n.js', array(), '0.1', true);
}
add_action('wp_enqueue_scripts', 'neo_theme_assets');

/* ---- WooCommerce ---- */
function neo_woo_setup() {
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'neo_woo_setup');

// Pas de sidebar boutique
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
// Envelopper le contenu WooCommerce dans la charte
add_action('woocommerce_before_main_content', function () {
    echo '<main class="neo-shop"><div class="neo-shop-inner">';
}, 5);
add_action('woocommerce_after_main_content', function () {
    echo '</div></main>';
}, 50);
// 3 produits par ligne
add_filter('loop_shop_columns', function(){ return 3; });
// CSS boutique
add_action('wp_enqueue_scripts', function () {
    if ( function_exists('is_woocommerce') && (is_woocommerce() || is_cart() || is_checkout() || is_account_page()) ) {
        wp_enqueue_style('neo-shop', get_template_directory_uri() . '/assets/shop.css', array(), filemtime(get_template_directory() . '/assets/shop.css'));
    }
}, 20);

/* ---- SEO : Schema LocalBusiness (AutoRepair) site-wide ---- */
function neo_localbusiness_schema() {
    $home = home_url('/');
    $schema = array(
        '@context' => 'https://schema.org',
        '@type'    => 'AutoRepair',
        '@id'      => $home . '#business',
        'name'     => 'Neo Carrosserie',
        'image'    => get_template_directory_uri() . '/assets/logo-neo.svg',
        'url'      => $home,
        'telephone'=> '+41215335656',
        'email'    => 'info@neo-carrosserie.ch',
        'priceRange' => '$$',
        'address'  => array(
            '@type' => 'PostalAddress',
            'streetAddress'   => 'Chem. de St-Triphon 22',
            'postalCode'      => '1860',
            'addressLocality' => 'Aigle',
            'addressRegion'   => 'Vaud',
            'addressCountry'  => 'CH',
        ),
        'geo' => array('@type'=>'GeoCoordinates','latitude'=>46.3125,'longitude'=>6.9560),
        'openingHoursSpecification' => array(array(
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => array('Monday','Tuesday','Wednesday','Thursday','Friday'),
            'opens' => '08:00', 'closes' => '17:30',
        )),
        'areaServed' => array(
            array('@type'=>'City','name'=>'Aigle'),
            array('@type'=>'City','name'=>'Monthey'),
            array('@type'=>'City','name'=>'Bex'),
            array('@type'=>'City','name'=>'Villeneuve'),
            array('@type'=>'City','name'=>'Montreux'),
            array('@type'=>'City','name'=>'Vevey'),
            array('@type'=>'City','name'=>'Martigny'),
            array('@type'=>'City','name'=>'Saint-Maurice'),
            array('@type'=>'AdministrativeArea','name'=>'Chablais'),
            array('@type'=>'AdministrativeArea','name'=>'Vaud'),
            array('@type'=>'AdministrativeArea','name'=>'Valais'),
        ),
        'makesOffer' => array(
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Réparation de carrosserie')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Peinture automobile')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Débosselage sans peinture')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Réparation après grêle')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Remplacement de pare-brise')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Nettoyage et detailing auto et bateau')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Conciergerie automobile')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Entretien auto et bateau')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Réparation et peinture de jantes')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Pose de vitres teintées')),
            array('@type'=>'Offer','itemOffered'=>array('@type'=>'Service','name'=>'Recharge et entretien de climatisation')),
        ),
        'sameAs' => array('https://maps.google.com/?cid=10573694802309393209', 'https://www.instagram.com/neocarrosserie/', 'https://www.tiktok.com/@neocarrosserie', 'https://www.facebook.com/neocarrosserie', 'https://www.linkedin.com/company/neo-carrosserie/', 'https://www.pinterest.com/neocarrosserie/', 'https://x.com/NeoCarrosserie', 'https://www.youtube.com/@NeoCarrosserie', 'https://www.threads.com/@neocarrosserie'),
    );
    echo "\n<script type=\"application/ld+json\">" . wp_json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) . "</script>\n";
}
add_action('wp_head', 'neo_localbusiness_schema', 20);

// Bande "Tarifs" réutilisable sur les pages services (honnête : plancher + devis sur place)
function neo_tarifs_band( $from = 'CHF 50.–' ) {
    ob_start(); ?>
  <!-- TARIFS -->
  <section style="max-width:1280px;margin:14px auto 0;padding:0 44px">
    <div style="background:#FBF3E6;border:1px solid #F2D9A8;border-radius:24px;padding:34px 40px;display:flex;flex-wrap:wrap;align-items:center;gap:26px;justify-content:space-between">
      <div style="flex:1 1 360px;min-width:280px">
        <div style="font:700 14px Manrope;letter-spacing:.16em;text-transform:uppercase;color:#F26A12">Tarifs</div>
        <div style="display:flex;align-items:baseline;gap:10px;margin-top:8px">
          <span style="font:600 18px Manrope;color:#8a6a26">dès</span>
          <span style="font:800 44px/1 Archivo;color:#15140F"><?php echo esc_html( $from ); ?></span>
        </div>
        <p style="font:400 16px/1.6 Manrope;color:#5E5C57;margin:12px 0 0;max-width:540px">Devis gratuit et sans engagement, établi sur place en quelques minutes. Le prix final dépend du véhicule et de l'étendue des dégâts. Prise en charge assurance possible.</p>
      </div>
      <div style="display:flex;flex-wrap:wrap;gap:12px">
        <a href="tel:+41215335656" style="display:flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;padding:15px 24px;border-radius:13px;box-shadow:0 12px 30px rgba(229,57,11,.28)"><span style="font:800 18px Archivo">021 533 56 56</span></a>
        <a href="/contact/" style="display:inline-flex;align-items:center;text-decoration:none;background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);color:#fff;font:700 16px Manrope;padding:15px 24px;border-radius:12px;box-shadow:0 10px 26px rgba(5,25,43,.32)">Devis gratuit</a>
      </div>
    </div>
  </section>
<?php return ob_get_clean();
}


// Sélection de produits aléatoires sur la page boutique (sous les catégories)
function neo_shop_random_products() {
    if ( ! function_exists('is_shop') || ! is_shop() ) return;
    echo '<div style="max-width:1180px;margin:50px auto 0;padding:0 20px">';
    echo '<h2 style="font:800 28px/1.1 Archivo;letter-spacing:-.02em;margin:0 0 6px;color:#15140F">Nouveautés</h2>';
    echo '<p style="font:400 16px Manrope;color:#5E5C57;margin:0 0 22px">Nos derniers produits d\'entretien ajoutés au catalogue.</p>';
    echo do_shortcode('[products limit="8" columns="4" orderby="date" order="DESC" visibility="visible"]');
    echo '</div>';
}
add_action('woocommerce_after_shop_loop', 'neo_shop_random_products', 30);

// Retirer le fil d'Ariane WooCommerce (Home / Boutique)
add_action('init', function () {
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
});

// Titre percutant sur la page boutique
add_filter('woocommerce_page_title', function ($title) {
    if (function_exists('is_shop') && is_shop()) {
        return 'Faites briller votre auto &amp; votre bateau';
    }
    return $title;
});

// --- Bouton panier (nombre de produits + total CHF, maj AJAX via fragments) ---
function neo_cart_badge() {
    $c = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
    return '<span class="neo-cart-count" style="position:absolute;top:-7px;right:-8px;display:inline-flex;align-items:center;justify-content:center;min-width:19px;height:19px;padding:0 5px;border-radius:999px;background:#fff;color:#15140F;font:800 11px Manrope;box-shadow:0 2px 6px rgba(0,0,0,.28)">' . esc_html($c) . '</span>';
}
function neo_cart_total() {
    $t = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_subtotal() : '';
    return '<span class="neo-cart-total" style="font:800 15px Archivo;white-space:nowrap">' . $t . '</span>';
}
function neo_cart_chip() {
    return '<a href="/panier/" aria-label="Voir le panier" style="position:relative;display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;height:50px;padding:0 18px;border-radius:11px;box-shadow:0 8px 22px rgba(229,57,11,.32)">'
        . '<svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M6 8h12l-1 11.5a1 1 0 0 1-1 .9H8a1 1 0 0 1-1-.9L6 8z"/><path d="M9 9V6.5a3 3 0 0 1 6 0V9"/></svg>'
        . neo_cart_total()
        . neo_cart_badge()
        . '</a>';
}
add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    $fragments['span.neo-cart-count'] = neo_cart_badge();
    $fragments['span.neo-cart-total'] = neo_cart_total();
    return $fragments;
});
// Charger le script de rafraîchissement des fragments (maj du badge en direct)
add_action('wp_enqueue_scripts', function () {
    if (function_exists('is_woocommerce')) {
        wp_enqueue_script('wc-cart-fragments');
    }
}, 20);

// --- Présentation élégante des cartes produit ---
// Image encadrée (pour zoom + coins) + badge "Nouveau"
add_action('after_setup_theme', function () {
    remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    add_action('woocommerce_before_shop_loop_item_title', 'neo_loop_thumb', 10);
});
function neo_loop_thumb() {
    global $product;
    echo '<div class="neo-thumb">';
    $pid = $product->get_id();
    if ( (time() - (int) get_post_time('U', true, $pid)) < 30 * DAY_IN_SECONDS ) {
        echo '<span class="neo-badge-new">Nouveau</span>';
    }
    echo woocommerce_get_product_thumbnail();
    echo '</div>';
}
// Label catégorie au-dessus du titre
add_action('woocommerce_shop_loop_item_title', 'neo_loop_category', 9);
function neo_loop_category() {
    global $product;
    $terms = get_the_terms($product->get_id(), 'product_cat');
    if ($terms && ! is_wp_error($terms)) {
        foreach ($terms as $t) {
            if ($t->slug === 'uncategorized') continue;
            echo '<span class="neo-loop-cat">' . esc_html($t->name) . '</span>';
            break;
        }
    }
}

// --- Chat live Tawk.to (front uniquement) ---
add_action('wp_footer', function () {
    if (is_admin()) return;
    ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
Tawk_API.customStyle = {
  visibility: {
    desktop: { position: 'br', xOffset: 20, yOffset: 20 },
    mobile:  { position: 'br', xOffset: 12, yOffset: 12 }
  }
};
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6a46118d445e311d44ba28c0/1jsgr94di';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <?php
}, 99);

// Sommaire auto des pages légales (à partir des H2 de .neo-legal-card)
add_action('wp_footer', function () {
    ?>
<script>
(function(){
  var card=document.querySelector('.neo-legal-card'), toc=document.querySelector('.neo-toc');
  if(!card||!toc) return;
  var hs=card.querySelectorAll('h2'); if(!hs.length) return;
  var html='<div class="neo-toc-title">Sommaire</div>';
  hs.forEach(function(h,i){ var id=h.id||('sec-'+(i+1)); h.id=id; html+='<a href="#'+id+'">'+h.textContent+'</a>'; });
  toc.innerHTML=html;
})();
</script>
    <?php
}, 100);

// Bouton "Retour en haut" (flottant, bas-gauche pour éviter le chat)
add_action('wp_footer', function () {
    ?>
<button id="neo-top" aria-label="Retour en haut" title="Retour en haut" style="position:fixed;left:22px;bottom:22px;z-index:9998;width:48px;height:48px;border:0;border-radius:14px;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);box-shadow:0 12px 26px -10px rgba(229,57,11,.6);cursor:pointer;opacity:0;visibility:hidden;transform:translateY(10px);transition:opacity .25s ease,transform .25s ease,visibility .25s ease">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="display:block;margin:auto"><polyline points="18 15 12 9 6 15"></polyline></svg>
</button>
<script>
(function(){
  var b=document.getElementById('neo-top'); if(!b) return;
  function bannerShown(){ var cb=document.querySelector('.cmplz-cookiebanner'); return !!(cb && cb.offsetParent!==null && getComputedStyle(cb).display!=='none' && getComputedStyle(cb).visibility!=='hidden'); }
  function upd(){ var on=window.pageYOffset>420 && !bannerShown(); b.style.opacity=on?'1':'0'; b.style.visibility=on?'visible':'hidden'; b.style.transform=on?'translateY(0)':'translateY(10px)'; }
  window.addEventListener('scroll',upd,{passive:true});
  document.addEventListener('click',upd); document.addEventListener('cmplz_status_change',upd); setTimeout(upd,1500); upd();
  b.addEventListener('click',function(){ window.scrollTo({top:0,behavior:'smooth'}); });
})();
</script>
    <?php
}, 101);

// Menu burger (mobile / tablette)
add_action('wp_footer', function () {
    ?>
<script>
(function(){
  var b=document.getElementById('neo-burger'); if(!b) return;
  var oi=document.getElementById('neo-burger-open'), ci=document.getElementById('neo-burger-close');
  function set(open){ document.body.classList.toggle('neo-nav-open',open); b.setAttribute('aria-expanded',open?'true':'false'); if(oi)oi.style.display=open?'none':'block'; if(ci)ci.style.display=open?'block':'none'; }
  b.addEventListener('click',function(){ set(!document.body.classList.contains('neo-nav-open')); });
  var nav=document.getElementById('neo-nav');
  if(nav) nav.addEventListener('click',function(e){ if(e.target.closest('a')) set(false); });
  window.addEventListener('resize',function(){ if(window.innerWidth>1024) set(false); });
})();
</script>
    <?php
}, 102);

// Selecteur de langue : ouverture au clic (fallback tactile iOS, en plus du :hover)
add_action('wp_footer', function () {
    ?>
<script>
(function(){
  var w=document.querySelector('.neo-lang'); if(!w) return;
  var t=w.querySelector('.neo-lang-trigger'); if(!t) return;
  t.addEventListener('click',function(e){ e.preventDefault(); e.stopPropagation(); var o=w.classList.toggle('is-open'); t.setAttribute('aria-expanded',o?'true':'false'); });
  document.addEventListener('click',function(e){ if(!w.contains(e.target)) w.classList.remove('is-open'); });
  document.addEventListener('keydown',function(e){ if(e.key==='Escape') w.classList.remove('is-open'); });
})();
</script>
    <?php
}, 103);

// En-tete sticky : ombre + reduction au defilement
add_action('wp_footer', function () {
    ?>
<script>
(function(){ var w=document.querySelector('.neo-header-wrap'); if(!w) return; function u(){ w.classList.toggle('is-stuck', window.pageYOffset>8); } window.addEventListener('scroll',u,{passive:true}); u(); })();
</script>
    <?php
}, 104);

/* ============================================================
   Upload client sécurisé — carte grise + photos des dégâts
   (formulaire de contact). Aucun plugin payant requis.
   ============================================================ */
add_action('wp_ajax_neo_client_upload',        'neo_client_upload');
add_action('wp_ajax_nopriv_neo_client_upload', 'neo_client_upload');
function neo_client_upload() {
    // 1. Jeton anti-CSRF
    if ( empty($_POST['nonce']) || ! wp_verify_nonce($_POST['nonce'], 'neo_client_upload') ) {
        wp_send_json_error(['message' => 'Session expirée, rechargez la page.'], 403);
    }
    if ( empty($_FILES['file']) || ! is_array($_FILES['file']) ) {
        wp_send_json_error(['message' => 'Aucun fichier reçu.'], 400);
    }
    $f = $_FILES['file'];
    if ( ($f['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK ) {
        wp_send_json_error(['message' => 'Échec du transfert du fichier.'], 400);
    }

    // 2. Taille max 10 Mo
    if ( $f['size'] > 10 * 1024 * 1024 ) {
        wp_send_json_error(['message' => 'Fichier trop lourd (10 Mo maximum).'], 400);
    }

    // 3. Extension autorisée
    $allowed = ['pdf','jpg','jpeg','png','webp','heic','heif'];
    $ext = strtolower( pathinfo($f['name'], PATHINFO_EXTENSION) );
    if ( ! in_array($ext, $allowed, true) ) {
        wp_send_json_error(['message' => 'Format non autorisé (PDF, JPG, PNG, WEBP ou HEIC).'], 400);
    }

    // 4. Vérification du contenu réel (défense en profondeur)
    $head = @file_get_contents($f['tmp_name'], false, null, 0, 512);
    if ( $head === false ) {
        wp_send_json_error(['message' => 'Fichier illisible.'], 400);
    }
    if ( stripos($head, '<?php') !== false || stripos($head, '<script') !== false ) {
        wp_send_json_error(['message' => 'Fichier refusé.'], 400);
    }
    $ok_content = false;
    if ( $ext === 'pdf' ) {
        $ok_content = ( strpos($head, '%PDF-') === 0 );
    } elseif ( in_array($ext, ['heic','heif'], true) ) {
        $ok_content = ( substr($head, 4, 4) === 'ftyp' );        // conteneur ISO-BMFF
    } else {
        $ok_content = ( @getimagesize($f['tmp_name']) !== false ); // vraie image
    }
    if ( ! $ok_content ) {
        wp_send_json_error(['message' => 'Le fichier ne correspond pas à son extension.'], 400);
    }

    // 5. Dossier protégé
    $up  = wp_upload_dir();
    $sub = '/neo-client/' . date('Y/m');
    $dir = $up['basedir'] . $sub;
    if ( ! file_exists($dir) ) { wp_mkdir_p($dir); }
    $root = $up['basedir'] . '/neo-client';
    $ht   = $root . '/.htaccess';
    if ( ! file_exists($ht) ) {
        @file_put_contents($ht,
            "Options -Indexes\n" .
            "<FilesMatch \"\\.(php|phtml|phar|phps|cgi|pl|py|sh|asp)$\">\n" .
            "  Require all denied\n</FilesMatch>\n");
    }
    $idx = $root . '/index.html';
    if ( ! file_exists($idx) ) { @file_put_contents($idx, ''); }

    // 6. Nom aléatoire non devinable
    $base = sanitize_file_name( pathinfo($f['name'], PATHINFO_FILENAME) );
    $base = $base !== '' ? mb_substr($base, 0, 40) : 'fichier';
    $rand = wp_generate_password(24, false, false);
    $filename = $base . '-' . $rand . '.' . $ext;
    $dest = trailingslashit($dir) . $filename;

    if ( ! @move_uploaded_file($f['tmp_name'], $dest) ) {
        wp_send_json_error(['message' => 'Impossible d’enregistrer le fichier.'], 500);
    }
    @chmod($dest, 0644); // lisible par le serveur web (lien cliquable dans l'e-mail)

    wp_send_json_success([
        'url'  => $up['baseurl'] . $sub . '/' . $filename,
        'name' => wp_basename($f['name']),
    ]);
}

/* ============================================================
   SEO / Performance — préconnexion polices + Open Graph image
   ============================================================ */
// Préconnexion aux domaines de polices (accélère le rendu)
add_action('wp_head', function () {
    $neo_fu = get_template_directory_uri() . '/assets/fonts/';
    echo '<link rel="preload" as="font" type="font/woff2" crossorigin href="' . esc_url($neo_fu . 'archivo-800-latin.woff2') . '">' . "\n";
    echo '<link rel="preload" as="font" type="font/woff2" crossorigin href="' . esc_url($neo_fu . 'manrope-400-latin.woff2') . '">' . "\n";
}, 1);

// Image Open Graph / Twitter par défaut (Yoast n'en émet pas sans réglage)
add_action('wp_head', function () {
    $img = get_template_directory_uri() . '/assets/og-neo.jpg';
    echo '<meta property="og:image" content="' . esc_url($img) . '">' . "\n";
    echo '<meta property="og:image:width" content="1200">' . "\n";
    echo '<meta property="og:image:height" content="630">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($img) . '">' . "\n";
}, 6);

// Vérification de propriété du site — Pinterest (ne pas supprimer)
add_action('wp_head', function () {
    echo '<meta name="p:domain_verify" content="d332eaf7541cbd6448cefe6923b6e517">' . "\n";
}, 7);

/* ============================================================
   Performance — décharger les assets WooCommerce hors boutique
   (on garde wc-cart-fragments pour la puce panier de l'en-tête)
   ============================================================ */
add_action('wp_enqueue_scripts', function () {
    if ( ! function_exists('is_woocommerce') ) return;
    if ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) return;
    // Styles WooCommerce inutiles hors boutique (render-blocking)
    foreach ( array('woocommerce-general','woocommerce-layout','woocommerce-smallscreen',
                    'wc-blocks-style','wc-blocks-vendors-style','brands-styles') as $h ) {
        wp_dequeue_style($h);
    }
    // Scripts non essentiels (on conserve jquery, woocommerce)
    foreach ( array('wc-add-to-cart','wc-single-product','wc-checkout','flexslider','zoom','photoswipe') as $h ) {
        wp_dequeue_script($h);
    }
}, 99);

/* ============================================================
   Performance — front léger : retire les scripts/CSS inutiles
   ============================================================ */
add_action('init', function () {
    // Emojis (JS de détection + CSS)
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    // oEmbed (liens de découverte + wp-embed.js)
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
});
add_action('wp_footer', function () { wp_dequeue_script('wp-embed'); }, 1);

// jQuery Migrate : inutile sur ce thème moderne
add_action('wp_default_scripts', function ($scripts) {
    if ( is_admin() ) return;
    if ( isset($scripts->registered['jquery']) && ! empty($scripts->registered['jquery']->deps) ) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps, array('jquery-migrate')
        );
    }
});

// wc-cart-fragments : requête AJAX panier à CHAQUE page — inutile (pas de mini-panier dynamique)
add_action('wp_enqueue_scripts', function () { wp_dequeue_script('wc-cart-fragments'); }, 20);

/* ============================================================
   Recherche produits — overlay moderne + recherche live (AJAX)
   ============================================================ */
add_action('wp_ajax_neo_search',        'neo_product_search');
add_action('wp_ajax_nopriv_neo_search', 'neo_product_search');
function neo_product_search() {
    $q = isset($_GET['q']) ? sanitize_text_field(wp_unslash($_GET['q'])) : '';
    $items = array();
    if ( function_exists('wc_get_product') && mb_strlen($q) >= 2 ) {
        $wpq = new WP_Query(array(
            'post_type'      => 'product',
            'post_status'    => 'publish',
            'posts_per_page' => 8,
            's'              => $q,
            'no_found_rows'  => true,
        ));
        while ( $wpq->have_posts() ) {
            $wpq->the_post();
            $p = wc_get_product(get_the_ID());
            if ( ! $p ) continue;
            $cat = '';
            $terms = get_the_terms(get_the_ID(), 'product_cat');
            if ( $terms && ! is_wp_error($terms) ) $cat = $terms[0]->name;
            $thumb = get_the_post_thumbnail_url(get_the_ID(), 'woocommerce_thumbnail');
            if ( ! $thumb && function_exists('wc_placeholder_img_src') ) $thumb = wc_placeholder_img_src();
            $items[] = array(
                'title' => get_the_title(),
                'url'   => get_permalink(),
                'price' => $p->get_price_html(),
                'thumb' => $thumb,
                'cat'   => $cat,
            );
        }
        wp_reset_postdata();
    }
    wp_send_json_success(array('items' => $items));
}

// Overlay de recherche (rendu sur toutes les pages, WooCommerce requis)
add_action('wp_footer', function () {
    if ( ! function_exists('is_shop') ) return;
    $ajax    = esc_url( admin_url('admin-ajax.php') );
    $action  = esc_url( home_url('/') );
    $popular = array('Microfibre séchage','Nettoyant jantes','Nettoyant vitres','Nettoyant intérieur','Cire de protection','Polish','Shampoing auto');
    $brands  = array("Meguiar's",'Koch Chemie','Gyeon','Sonax','AntiDirt','Dr. Wack','ADBL','Soft99');
    $cats    = get_terms(array('taxonomy'=>'product_cat','hide_empty'=>true,'number'=>10,'orderby'=>'count','order'=>'DESC'));

    $chips = function($arr){ $o=''; foreach($arr as $t){ $o.='<button type="button" class="neo-s-chip" data-q="'.esc_attr($t).'">'.esc_html($t).'</button>'; } return $o; };
    $cat_chips = '';
    if ( ! is_wp_error($cats) ) foreach ($cats as $c) {
        if ($c->slug==='uncategorized') continue;
        $cat_chips .= '<a class="neo-s-chip" href="'.esc_url(get_term_link($c)).'">'.esc_html($c->name).'</a>';
    }
    ?>
    <div class="neo-search-overlay" id="neo-search-overlay" aria-hidden="true">
      <div class="neo-search-modal" role="dialog" aria-label="Recherche produits">
        <form class="neo-search-top" action="<?php echo $action; ?>" method="get" role="search">
          <span class="neo-search-ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#8a857c" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.5" y2="16.5"/></svg></span>
          <input type="search" name="s" id="neo-search-input" placeholder="Rechercher un produit, une marque…" autocomplete="off" aria-label="Rechercher">
          <input type="hidden" name="post_type" value="product">
          <button type="button" class="neo-search-cancel" id="neo-search-close">Annuler</button>
        </form>
        <div class="neo-search-body">
          <aside class="neo-search-side">
            <div class="neo-s-block" id="neo-s-recent-block" hidden>
              <div class="neo-s-head"><span>Recherches récentes</span><button type="button" id="neo-s-recent-clear">Effacer</button></div>
              <div class="neo-s-chips" id="neo-s-recent"></div>
            </div>
            <div class="neo-s-block">
              <div class="neo-s-head"><span>Populaires</span></div>
              <div class="neo-s-chips"><?php echo $chips($popular); ?></div>
            </div>
            <div class="neo-s-block">
              <div class="neo-s-head"><span>Marques</span></div>
              <div class="neo-s-chips"><?php echo $chips($brands); ?></div>
            </div>
            <div class="neo-s-block">
              <div class="neo-s-head"><span>Catégories</span></div>
              <div class="neo-s-chips"><?php echo $cat_chips; ?></div>
            </div>
          </aside>
          <div class="neo-search-main">
            <div class="neo-s-head" id="neo-s-results-head"><span>Suggestions</span></div>
            <div id="neo-search-results" class="neo-search-results">
              <p class="neo-s-hint">Tapez au moins 2 caractères pour rechercher parmi nos produits.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
    (function(){
      var AJAX = <?php echo json_encode($ajax); ?>;
      var ov = document.getElementById('neo-search-overlay');
      if(!ov) return;
      var input = document.getElementById('neo-search-input');
      var results = document.getElementById('neo-search-results');
      var head = document.getElementById('neo-s-results-head').querySelector('span');
      var recentBlock = document.getElementById('neo-s-recent-block');
      var recentWrap = document.getElementById('neo-s-recent');
      var timer=null, lastQ='';

      function open(){ ov.classList.add('is-open'); ov.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden'; renderRecent(); setTimeout(function(){input.focus();},60); }
      function close(){ ov.classList.remove('is-open'); ov.setAttribute('aria-hidden','true'); document.body.style.overflow=''; }
      document.querySelectorAll('.neo-search-trigger').forEach(function(b){ b.addEventListener('click',function(e){e.preventDefault();open();}); });
      document.getElementById('neo-search-close').addEventListener('click',close);
      ov.addEventListener('mousedown',function(e){ if(e.target===ov) close(); });
      document.addEventListener('keydown',function(e){ if(e.key==='Escape'&&ov.classList.contains('is-open')) close(); });

      // Recherches récentes (localStorage)
      function getRecent(){ try{return JSON.parse(localStorage.getItem('neo_recent_search')||'[]');}catch(e){return [];} }
      function saveRecent(q){ q=q.trim(); if(q.length<2)return; var a=getRecent().filter(function(x){return x.toLowerCase()!==q.toLowerCase();}); a.unshift(q); a=a.slice(0,6); try{localStorage.setItem('neo_recent_search',JSON.stringify(a));}catch(e){} }
      function renderRecent(){
        var a=getRecent();
        if(!a.length){ recentBlock.hidden=true; return; }
        recentBlock.hidden=false; recentWrap.innerHTML='';
        a.forEach(function(q){ var b=document.createElement('button'); b.type='button'; b.className='neo-s-chip'; b.setAttribute('data-q',q); b.textContent=q; recentWrap.appendChild(b); });
      }
      document.getElementById('neo-s-recent-clear').addEventListener('click',function(){ try{localStorage.removeItem('neo_recent_search');}catch(e){} renderRecent(); });

      function money(h){ return h||''; }
      function render(items,q){
        if(!items.length){ results.innerHTML='<p class="neo-s-hint">Aucun produit trouvé pour «&nbsp;'+q.replace(/</g,'&lt;')+'&nbsp;».</p>'; return; }
        var html='<div class="neo-s-grid">';
        items.forEach(function(it){
          html+='<a class="neo-s-card" href="'+it.url+'">'
             +'<span class="neo-s-thumb"><img src="'+it.thumb+'" alt="" loading="lazy"></span>'
             +'<span class="neo-s-info">'
             +(it.cat?'<span class="neo-s-cat">'+it.cat+'</span>':'')
             +'<span class="neo-s-name">'+it.title+'</span>'
             +'<span class="neo-s-price">'+money(it.price)+'</span>'
             +'</span></a>';
        });
        html+='</div>';
        results.innerHTML=html;
      }
      function search(q){
        q=q.trim();
        if(q.length<2){ head.textContent='Suggestions'; results.innerHTML='<p class="neo-s-hint">Tapez au moins 2 caractères pour rechercher parmi nos produits.</p>'; return; }
        head.textContent='Résultats';
        results.innerHTML='<p class="neo-s-hint">Recherche…</p>';
        fetch(AJAX+'?action=neo_search&q='+encodeURIComponent(q),{credentials:'same-origin'})
          .then(function(r){return r.json();})
          .then(function(res){ if(res&&res.success) render(res.data.items,q); })
          .catch(function(){ results.innerHTML='<p class="neo-s-hint">Erreur réseau.</p>'; });
      }
      input.addEventListener('input',function(){
        var q=input.value; if(q===lastQ)return; lastQ=q;
        clearTimeout(timer); timer=setTimeout(function(){search(q);},220);
      });
      // clic sur une puce (populaires / marques / récentes)
      ov.addEventListener('click',function(e){
        var chip=e.target.closest('.neo-s-chip[data-q]'); if(!chip)return;
        e.preventDefault(); var q=chip.getAttribute('data-q');
        input.value=q; lastQ=q; saveRecent(q); renderRecent(); search(q); input.focus();
      });
      // Entrée = page de résultats complète
      ov.querySelector('.neo-search-top').addEventListener('submit',function(){ saveRecent(input.value); });
    })();
    </script>
    <?php
}, 60);

/* ============================================================
   Multilingue — traduire les balises SEO (title/meta/OG) que
   TranslatePress gratuit ne gère pas. Moteur Google + cache.
   ============================================================ */
function neo_google_translate_str( $text, $sl, $tl ) {
    $text = trim( (string) $text );
    if ( $text === '' ) return '';
    $url  = 'https://translate.googleapis.com/translate_a/single?client=gtx&sl=' . $sl . '&tl=' . $tl . '&dt=t&q=' . rawurlencode( $text );
    $resp = wp_remote_get( $url, array( 'timeout' => 8, 'user-agent' => 'Mozilla/5.0' ) );
    if ( is_wp_error( $resp ) ) return '';
    $data = json_decode( wp_remote_retrieve_body( $resp ), true );
    if ( ! is_array( $data ) || ! isset( $data[0] ) || ! is_array( $data[0] ) ) return '';
    $out = '';
    foreach ( $data[0] as $seg ) { if ( isset( $seg[0] ) ) $out .= $seg[0]; }
    // Nom de ville "Aigle" : ne doit jamais être traduit (Adler/Eagle/Aquila -> Aigle)
    if ( stripos( $text, 'Aigle' ) !== false ) {
        $out = str_ireplace( array( 'Adler', 'Eagle', 'Aquila' ), 'Aigle', $out );
    }
    return $out;
}
// Langue TP courante -> code court, ou false si langue par défaut (fr)
function neo_tp_target_lang() {
    global $TRP_LANGUAGE;
    if ( empty( $TRP_LANGUAGE ) ) return false;
    $map = array( 'de_DE' => 'de', 'it_IT' => 'it' );
    return isset( $map[ $TRP_LANGUAGE ] ) ? $map[ $TRP_LANGUAGE ] : false;
}
// Traduit une chaîne SEO (avec cache option). $keep_brand : garde la partie après |, – ou -
function neo_tp_translate_seo( $text, $keep_brand = false ) {
    $tl = neo_tp_target_lang();
    if ( ! $tl || $text === '' ) return $text;
    $brand = ''; $sep = '';
    if ( $keep_brand ) {
        foreach ( array( ' | ', ' – ', ' - ' ) as $s ) {
            $pos = strrpos( $text, $s );
            if ( $pos !== false ) { $sep = $s; $brand = substr( $text, $pos + strlen( $s ) ); $text = substr( $text, 0, $pos ); break; }
        }
    }
    $key = 'neo_seo_' . $tl . '_' . md5( $text );
    $cached = get_option( $key, false );
    if ( $cached === false ) {
        $cached = neo_google_translate_str( $text, 'fr', $tl );
        if ( $cached === '' ) return $sep ? $text . $sep . $brand : $text; // échec : on ne cache pas
        update_option( $key, $cached, false );
    }
    return $sep ? $cached . $sep . $brand : $cached;
}
// Yoast : title + meta + OG
add_filter( 'wpseo_title',          function ( $t ) { return neo_tp_translate_seo( $t, true ); }, 999 );
add_filter( 'wpseo_opengraph_title',function ( $t ) { return neo_tp_translate_seo( $t, true ); }, 999 );
add_filter( 'wpseo_metadesc',       function ( $t ) { return neo_tp_translate_seo( $t, false ); }, 999 );
add_filter( 'wpseo_opengraph_desc', function ( $t ) { return neo_tp_translate_seo( $t, false ); }, 999 );
// Repli si Yoast ne pilote pas le title
add_filter( 'pre_get_document_title', function ( $t ) { return $t ? neo_tp_translate_seo( $t, true ) : $t; }, 999 );

/* ============================================================
   Redirections 301 — anciennes URLs (ancien site) -> nouvelles
   ============================================================ */
add_action('template_redirect', function () {
    // Anciens permaliens simples ?page_id=
    if ( isset($_GET['page_id']) ) {
        $map = array( '67' => '/services/', '54' => '/contact/', '12' => '/' );
        $pid = preg_replace('/\D/', '', (string) $_GET['page_id']);
        if ( isset($map[$pid]) ) { wp_redirect( home_url($map[$pid]), 301 ); exit; }
    }
    // Anciens slugs éventuels (filet de sécurité)
    if ( is_404() ) {
        $path = isset($_SERVER['REQUEST_URI']) ? trim( (string) parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/' ) : '';
        $path = preg_replace('#^(de|it)/#', '', $path); // ignorer préfixe langue
        $slug_map = array(
            'nos-services'   => '/services/',
            'contactez-nous' => '/contact/',
            'accueil'        => '/',
        );
        if ( isset($slug_map[$path]) ) { wp_redirect( home_url($slug_map[$path]), 301 ); exit; }
    }
}, 1);
