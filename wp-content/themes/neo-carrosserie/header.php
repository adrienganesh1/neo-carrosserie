<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div style="font-family:Manrope,system-ui,sans-serif;-webkit-font-smoothing:antialiased;background:#FEFEFE;color:#15140F">

  <!-- BARRE HAUT : langue (discret) -->
  <div style="border-bottom:1px solid #eee7dc;background:#fbf9f5">
    <div class="neo-topbar-bar" style="max-width:1280px;margin:0 auto;padding:7px 44px;display:flex;justify-content:space-between;align-items:center;gap:14px;flex-wrap:wrap">
<?php
      // Drapeaux SVG (fiables cross-plateforme, contrairement aux emojis)
      $flag_fr = '<svg viewBox="0 0 3 2" width="21" height="14" style="display:block"><rect width="3" height="2" fill="#fff"/><rect width="1" height="2" fill="#0055A4"/><rect width="1" height="2" x="2" fill="#EF4135"/></svg>';
      $flag_de = '<svg viewBox="0 0 5 3" width="21" height="14" style="display:block"><rect width="5" height="3" fill="#FFCE00"/><rect width="5" height="2" fill="#DD0000"/><rect width="5" height="1" fill="#000"/></svg>';
      $flag_it = '<svg viewBox="0 0 3 2" width="21" height="14" style="display:block"><rect width="3" height="2" fill="#fff"/><rect width="1" height="2" fill="#009246"/><rect width="1" height="2" x="2" fill="#CE2B37"/></svg>';
      $flag_gb = '<svg viewBox="0 0 60 30" width="21" height="14" style="display:block"><rect width="60" height="30" fill="#012169"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#C8102E" stroke-width="3"/><path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/><path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/></svg>';
?>
      <!-- Gauche : avis + expédition -->
      <div class="neo-topbar-left" style="display:flex;align-items:center;gap:22px;min-width:0">
        <span style="display:inline-flex;align-items:center;gap:8px;font:600 12.5px Manrope;color:#5E5C57;white-space:nowrap"><span aria-hidden="true" style="color:#F2A23F;font-size:12px;letter-spacing:1.5px">★★★★★</span><span data-i18n="topbar.reviews">Clients satisfaits dans le Chablais</span></span>
        <span class="neo-topbar-ship" style="display:inline-flex;align-items:center;gap:8px;font:600 12.5px Manrope;color:#5E5C57;white-space:nowrap"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#F26A12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><rect x="1" y="6" width="13" height="10" rx="1"/><path d="M14 9h4l3 3v4h-7z"/><circle cx="5.5" cy="18.5" r="1.6"/><circle cx="17.5" cy="18.5" r="1.6"/></svg><span data-i18n="topbar.ship">Commandé avant 14h — expédié aujourd'hui (lun–ven)</span></span>
      </div>
      <!-- Droite : liens + langue -->
      <div class="neo-topbar-right" style="display:flex;align-items:center;gap:16px;flex:none">
        <a href="/faq/" class="neo-topbar-link" style="text-decoration:none;font:600 12.5px Manrope;color:#5E5C57;white-space:nowrap" data-i18n="topbar.faq">Questions fréquentes</a>
        <a href="/contact/" class="neo-topbar-link" style="text-decoration:none;font:600 12.5px Manrope;color:#5E5C57;white-space:nowrap" data-i18n="nav.contact">Contact</a>
<?php
      // Sélecteur de langue branché sur TranslatePress (FR / DE / IT)
      $trp_langs = array(
          'fr_FR' => array('FR', $flag_fr, 'Français'),
          'de_DE' => array('DE', $flag_de, 'Deutsch'),
          'it_IT' => array('IT', $flag_it, 'Italiano'),
      );
      $trp_cur  = 'fr_FR';
      $trp_urls = array('fr_FR'=>home_url('/'), 'de_DE'=>trailingslashit(home_url('de')), 'it_IT'=>trailingslashit(home_url('it')));
      if ( class_exists('TRP_Translate_Press') ) {
          global $TRP_LANGUAGE;
          if ( ! empty($TRP_LANGUAGE) ) $trp_cur = $TRP_LANGUAGE;
          $trp = TRP_Translate_Press::get_trp_instance();
          $uc  = $trp ? $trp->get_component('url_converter') : null;
          if ( $uc ) {
              $cur = $uc->cur_page_url();
              foreach ( array_keys($trp_langs) as $lc ) { $trp_urls[$lc] = $uc->get_url_for_language($lc, $cur); }
          }
      }
      if ( ! isset($trp_langs[$trp_cur]) ) $trp_cur = 'fr_FR';
?>
      <div class="neo-lang" data-no-translation>
        <button type="button" class="neo-lang-trigger" aria-haspopup="true" aria-expanded="false" aria-label="Choisir la langue">
          <span class="neo-flag"><?php echo $trp_langs[$trp_cur][1]; ?></span>
          <span><?php echo $trp_langs[$trp_cur][0]; ?></span>
          <svg class="neo-lang-chev" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="neo-lang-menu" role="menu">
<?php foreach ( $trp_langs as $lc => $info ): ?>
          <a href="<?php echo esc_url($trp_urls[$lc]); ?>" role="menuitem" class="neo-lang-opt<?php echo $lc === $trp_cur ? ' is-active' : ''; ?>"><span class="neo-flag"><?php echo $info[1]; ?></span><?php echo esc_html($info[2]); ?></a>
<?php endforeach; ?>
        </div>
      </div>
      </div>
    </div>
  </div>

  <!-- HEADER -->
  <header style="position:relative;z-index:5;max-width:1280px;margin:0 auto;padding:26px 44px;display:flex;flex-wrap:wrap;align-items:center;gap:18px 36px">
    <a href="<?php echo esc_url(home_url("/")); ?>" style="display:flex;align-items:center;gap:12px;text-decoration:none">
      <img src="/wp-content/themes/neo-carrosserie/assets/logo-neo.svg" alt="NEO Carrosserie Aigle" style="height:84px;width:auto;display:block">
    </a>
    <button type="button" class="neo-search-trigger neo-search-bar" aria-label="Rechercher un produit">
      <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.5" y2="16.5"/></svg>
      <span>Rechercher un produit, une marque…</span>
    </button>
    <button type="button" class="neo-search-trigger neo-search-mobile" aria-label="Rechercher un produit" title="Rechercher"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.5" y2="16.5"/></svg></button>
    <button id="neo-burger" type="button" aria-label="Ouvrir le menu" aria-expanded="false"><svg id="neo-burger-open" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#15140F" stroke-width="2.2" stroke-linecap="round"><line x1="4" y1="7" x2="20" y2="7"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="17" x2="20" y2="17"/></svg><svg id="neo-burger-close" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#15140F" stroke-width="2.2" stroke-linecap="round" style="display:none"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg></button>
    <div class="neo-util" style="margin-left:auto;display:flex;flex-wrap:wrap;gap:12px;align-items:center;order:1">
      <a href="https://wa.me/41789545003" target="_blank" rel="noopener" aria-label="Message WhatsApp +41 78 954 50 03" title="WhatsApp +41 78 954 50 03" style="display:flex;align-items:center;gap:9px;padding:0 16px;height:50px;border-radius:11px;background:#25D366;flex:none;text-decoration:none;box-shadow:0 8px 20px rgba(37,211,102,.35)">
        <svg width="22" height="22" viewBox="0 0 32 32" fill="#fff" aria-hidden="true"><path d="M16 3C9.4 3 4 8.3 4 14.9c0 2.3.7 4.5 1.9 6.4L4 29l7.9-1.8c1.8 1 3.9 1.5 6.1 1.5h.1c6.6 0 11.9-5.3 11.9-11.9C30 8.3 24.6 3 18 3h-2zm.1 2.2c5.5 0 9.8 4.4 9.8 9.7s-4.4 9.7-9.8 9.7c-2 0-3.9-.6-5.5-1.6l-.4-.2-4 .9.9-3.9-.3-.4c-1.1-1.7-1.7-3.6-1.7-5.5 0-5.3 4.4-9.7 9.8-9.7zm-4.8 5.1c-.2 0-.6.1-.9.4-.3.3-1.2 1.2-1.2 2.9 0 1.7 1.2 3.4 1.4 3.6.2.2 2.4 3.8 6 5.2 3 1.2 3.6 1 4.3.9.7-.1 2.1-.9 2.4-1.7.3-.8.3-1.5.2-1.7-.1-.2-.4-.3-.8-.5-.4-.2-2.1-1-2.4-1.2-.3-.1-.6-.2-.8.2-.2.3-.9 1.2-1.1 1.4-.2.2-.4.3-.8.1-.4-.2-1.5-.6-2.9-1.8-1.1-.9-1.8-2.1-2-2.5-.2-.4 0-.6.2-.8.2-.2.4-.4.5-.7.2-.2.2-.4.4-.7.1-.3.1-.5 0-.7-.1-.2-.8-2-1.1-2.7-.3-.7-.6-.6-.8-.6h-.7z"/></svg>
        <span style="text-align:left;line-height:1.15;color:#fff;white-space:nowrap"><span style="display:block;font:600 10px Manrope;opacity:.9;letter-spacing:.04em">Message WhatsApp</span><span style="display:block;font:800 15px Archivo;letter-spacing:.01em">+41 78 954 50 03</span></span>
      </a>
      <a href="tel:+41215335656" style="display:flex;align-items:center;gap:11px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;height:50px;padding:0 18px;border-radius:11px;box-shadow:0 8px 22px rgba(229,57,11,.32)">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg>
        <span style="text-align:left;line-height:1.15"><span style="display:block;font:600 10px Manrope;opacity:.9;letter-spacing:.04em" data-i18n="cta.call_label">Appelez-nous</span><span style="display:block;font:800 15px Archivo;letter-spacing:.01em">021 533 56 56</span></span>
      </a>
      <?php echo function_exists('neo_cart_chip') ? neo_cart_chip() : ''; ?>
    </div>
<?php
      $neo_is_shop = function_exists('is_shop') && ( is_shop() || is_product_category() || is_product_tag() || is_product() || is_cart() || is_checkout() || is_account_page() );
?>
    <nav id="neo-nav" style="display:flex;flex-wrap:wrap;align-items:center;justify-content:<?php echo $neo_is_shop ? 'space-between' : 'flex-start'; ?>;gap:12px 15px;flex-basis:100%;order:2">
<?php
      if ($neo_is_shop):
        $neo_nav_cats = get_terms(array('taxonomy'=>'product_cat','hide_empty'=>true,'orderby'=>'name'));
?>
<?php
      // Icône SVG commune
      $neo_ico = function ($paths) {
        return '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#F26A12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none">'.$paths.'</svg>';
      };
?>
      <a href="/boutique/" style="display:inline-flex;align-items:center;gap:7px;text-decoration:none;color:#3d3b36;font:600 15px Manrope"><?php echo $neo_ico('<rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/>'); ?>Toute la boutique</a>
<?php
      // Méga-menu boutique : rubriques + icône + sous-catégories (inspiré mamm.ch)
      $neo_shop_menu = array(
        array('Lavage & nettoyage', '/produits/lavage/',             $neo_ico('<path d="M12 3s6 6.5 6 10.5a6 6 0 0 1-12 0C6 9.5 12 3 12 3z"/>'), array('lavage','nettoyants-degraissants','vitres-optiques')),
        array('Roues & pneus',      '/produits/roues-pneus/',        $neo_ico('<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><path d="M12 3v3M12 18v3M3 12h3M18 12h3"/>'), array()),
        array('Polissage',          '/produits/polissage-machines/', $neo_ico('<path d="M12 3l2 6 6 2-6 2-2 6-2-6-6-2 6-2z"/>'), array('polissage-machines','detailing-rapide')),
        array('Protection',         '/produits/protection-cires/',   $neo_ico('<path d="M12 3l7 3v5c0 4.5-3 7.6-7 9-4-1.4-7-4.5-7-9V6z"/>'), array('protection-cires','parfums-desodorisants')),
        array('Intérieur',          '/produits/interieur/',          $neo_ico('<path d="M7 11V6a2 2 0 0 1 2-2h4"/><path d="M6 11h10a2 2 0 0 1 2 2v4H6z"/><path d="M8 17v3M16 17v3"/>'), array()),
        array('Accessoires',        '/produits/accessoires-materiel/',$neo_ico('<path d="M9 8h5l1 3v8a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-8z"/><path d="M10 8V5h3V3"/><path d="M15 5h3M15 8h3"/>'), array('applicateurs-microfibres','accessoires-materiel','coffrets-kits')),
      );
      foreach ($neo_shop_menu as $neo_mi):
        list($neo_mlabel,$neo_mlink,$neo_mico,$neo_mkids) = $neo_mi;
        if (empty($neo_mkids)):
?>
      <a href="<?php echo esc_url($neo_mlink); ?>" style="display:inline-flex;align-items:center;gap:7px;text-decoration:none;color:#3d3b36;font:600 15px Manrope"><?php echo $neo_mico; ?><?php echo esc_html($neo_mlabel); ?></a>
<?php   else: ?>
      <div class="neo-hasdrop" style="position:relative;display:inline-block">
        <a href="<?php echo esc_url($neo_mlink); ?>" style="display:inline-flex;align-items:center;gap:7px;text-decoration:none;color:#3d3b36;font:600 15px Manrope"><?php echo $neo_mico; ?><?php echo esc_html($neo_mlabel); ?> <span style="font-size:11px;color:#F26A12">▾</span></a>
        <div class="neo-drop" style="position:absolute;top:100%;left:0;padding-top:12px;z-index:20;display:none">
          <div style="background:#fff;border:1px solid #ece7de;border-radius:12px;box-shadow:0 16px 40px rgba(5,25,43,.14);padding:8px;min-width:240px">
<?php       foreach ($neo_mkids as $neo_ks): $neo_kt = get_term_by('slug',$neo_ks,'product_cat'); if(!$neo_kt) continue; ?>
            <a href="<?php echo esc_url(get_term_link($neo_kt)); ?>" style="display:flex;justify-content:space-between;gap:14px;text-decoration:none;color:#3d3b36;font:600 14px Manrope;padding:9px 12px;border-radius:8px"><?php echo esc_html($neo_kt->name); ?> <span style="color:#b3afa6;font-weight:700"><?php echo (int)$neo_kt->count; ?></span></a>
<?php       endforeach; ?>
          </div>
        </div>
      </div>
<?php   endif; endforeach; ?>
      <a class="neo-back-site" href="<?php echo esc_url(home_url('/')); ?>" style="display:inline-flex;align-items:center;gap:7px;text-decoration:none;color:#5E5C57;font:700 13px Manrope;background:#fff;border:1px solid #e7e2d8;padding:7px 14px 7px 11px;border-radius:999px"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="11 18 5 12 11 6"/></svg>Retour au site</a>
<?php else: ?>
      <div class="neo-hasdrop" style="position:relative;display:inline-block">
        <a href="/services/" style="text-decoration:none;color:#3d3b36;font:600 17px Manrope"><span data-i18n="nav.services">Services</span> <span style="font-size:11px;color:#F26A12">▾</span></a>
        <div class="neo-drop" style="position:absolute;top:100%;left:0;padding-top:12px;z-index:20;display:none">
          <div style="background:#fff;border:1px solid #ece7de;border-radius:12px;box-shadow:0 16px 40px rgba(5,25,43,.14);padding:8px;min-width:240px">
            <a href="/services/" data-i18n="nav.allservices" style="display:block;text-decoration:none;color:#15140F;font:700 14px Manrope;padding:9px 12px;border-radius:8px">Tous nos services</a>
            <a href="/pare-brise/" data-i18n="nav.parebrise" style="display:block;text-decoration:none;color:#3d3b36;font:600 14px Manrope;padding:9px 12px;border-radius:8px">Remplacement de pare-brise</a>
            <a href="/debosselage/" data-i18n="nav.debosselage" style="display:block;text-decoration:none;color:#3d3b36;font:600 14px Manrope;padding:9px 12px;border-radius:8px">Débosselage sans peinture</a>
          </div>
        </div>
      </div>
      <a href="/conciergerie-automobile/" style="display:inline-flex;align-items:center;gap:8px;text-decoration:none;color:#3d3b36;font:600 17px Manrope"><span data-i18n="nav.conciergerie">Conciergerie</span> <span style="flex:none;font:800 9px Archivo;letter-spacing:.04em;color:#fff;background:linear-gradient(120deg,#FBB615,#F26A12 60%,#E5390B);padding:3px 7px;border-radius:6px;box-shadow:0 4px 10px rgba(229,57,11,.28)">PREMIUM</span></a>
      <a href="/nettoyage/" data-i18n="nav.nettoyage" style="text-decoration:none;color:#3d3b36;font:600 17px Manrope">Nettoyage</a>
      <a href="/zone-intervention/" style="text-decoration:none;color:#3d3b36;font:600 17px Manrope" data-i18n="nav.zone">Zone d'intervention</a>
      <a href="/realisations/" style="text-decoration:none;color:#3d3b36;font:600 17px Manrope" data-i18n="nav.real">Réalisations</a>
      <a href="/rapporteur/" style="display:inline-flex;align-items:center;gap:7px;text-decoration:none;color:#3d3b36;font:600 17px Manrope"><span style="flex:none;display:inline-flex;align-items:center;justify-content:center;height:20px;padding:0 5px;border-radius:6px;background:linear-gradient(120deg,#FBB615,#F26A12 60%,#E5390B);color:#fff;font:800 9px Archivo;letter-spacing:.02em">CHF</span><span data-i18n="nav.referrer">Rapporteur d'affaires</span></a>
      <a href="/contact/" style="text-decoration:none;color:#3d3b36;font:600 17px Manrope" data-i18n="nav.contact">Contact</a>
      <div class="neo-hasdrop" style="position:relative;margin-left:auto">
        <a href="/boutique/" class="neo-eshop-badge" style="display:inline-flex;align-items:center;gap:8px;text-decoration:none;color:#F26A12;font:800 15px Manrope;background:rgba(242,106,18,.09);border:1.5px solid rgba(242,106,18,.38);padding:9px 16px;border-radius:999px;transition:background .2s ease,color .2s ease,border-color .2s ease,box-shadow .2s ease"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M6 8h12l-1 11.5a1 1 0 0 1-1 .9H8a1 1 0 0 1-1-.9L6 8z"/><path d="M9 9V6.5a3 3 0 0 1 6 0V9"/></svg><span data-i18n="nav.shop">E-Shop</span> <span style="font-size:11px">▾</span></a>
        <div class="neo-drop" style="position:absolute;top:100%;right:0;padding-top:12px;z-index:20;display:none">
          <div style="background:#fff;border:1px solid #ece7de;border-radius:12px;box-shadow:0 16px 40px rgba(5,25,43,.14);padding:8px;min-width:230px">
            <a href="/boutique/" style="display:block;text-decoration:none;color:#15140F;font:700 14px Manrope;padding:9px 12px;border-radius:8px">Toute la boutique</a>
<?php
            $neo_shop_cats = function_exists('get_terms') ? get_terms(array('taxonomy'=>'product_cat','hide_empty'=>true,'orderby'=>'name')) : array();
            if (!is_wp_error($neo_shop_cats)) { foreach ($neo_shop_cats as $neo_c) { if ($neo_c->slug === 'uncategorized') continue; ?>
            <a href="<?php echo esc_url(get_term_link($neo_c)); ?>" style="display:block;text-decoration:none;color:#3d3b36;font:600 14px Manrope;padding:9px 12px;border-radius:8px"><?php echo esc_html($neo_c->name); ?></a>
<?php } } ?>
          </div>
        </div>
      </div>
<?php endif; ?>
    </nav>
  </header>
