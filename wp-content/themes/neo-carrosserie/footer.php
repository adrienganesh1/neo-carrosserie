<?php
// Bandeau promo boutique : sur toutes les pages SAUF les pages boutique/panier/compte
$neo_is_shopctx = function_exists('is_woocommerce') && ( is_shop() || is_product_category() || is_product_tag() || is_product() || is_cart() || is_checkout() || is_account_page() );
if ( ! $neo_is_shopctx ) : ?>
  <!-- BOUTIQUE PROMO -->
  <section style="max-width:1280px;margin:0 auto;padding:20px 44px 74px">
    <div style="position:relative;overflow:hidden;background:linear-gradient(115deg,#05192b,#0a3050 55%,#114061);border-radius:26px;padding:52px 50px;display:flex;flex-wrap:wrap;align-items:center;gap:44px;justify-content:space-between;color:#fff">
      <div style="flex:1 1 380px;min-width:300px">
        <div style="display:inline-flex;align-items:center;gap:8px;font:700 13px Manrope;letter-spacing:.16em;text-transform:uppercase;color:#F2A23F">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#F2A23F" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8h12l-1 11.5a1 1 0 0 1-1 .9H8a1 1 0 0 1-1-.9L6 8z"/><path d="M9 9V6.5a3 3 0 0 1 6 0V9"/></svg>Notre e-shop
        </div>
        <h2 style="font:800 38px/1.08 Archivo;letter-spacing:-.02em;margin:14px 0 0;max-width:520px">Produits d'entretien auto &amp; bateau</h2>
        <p style="font:400 18px/1.6 Manrope;color:#c9c4bb;margin:14px 0 0;max-width:480px">Detailing, lavage, protection, polissage&nbsp;: la sélection pro, livrée chez vous en Suisse.</p>
        <a href="/boutique/" style="display:inline-flex;align-items:center;gap:10px;margin-top:26px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;font:800 16px Manrope;padding:15px 26px;border-radius:13px;box-shadow:0 12px 30px rgba(229,57,11,.35)">Découvrir la boutique
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
        </a>
      </div>
      <div style="flex:0 1 auto;display:flex;gap:14px;flex-wrap:wrap;justify-content:center">
<?php
        $neo_promo = get_posts(array('post_type'=>'product','posts_per_page'=>4,'orderby'=>'date','order'=>'DESC','post_status'=>'publish','meta_key'=>'_thumbnail_id'));
        foreach ($neo_promo as $neo_pp):
          $neo_img = get_the_post_thumbnail_url($neo_pp->ID, 'woocommerce_thumbnail');
          if (!$neo_img) continue;
?>
        <a href="<?php echo esc_url(get_permalink($neo_pp->ID)); ?>" title="<?php echo esc_attr(get_the_title($neo_pp->ID)); ?>" style="display:block;width:118px;height:118px;border-radius:16px;overflow:hidden;background:#fff;border:1px solid rgba(255,255,255,.15)"><img src="<?php echo esc_url($neo_img); ?>" alt="<?php echo esc_attr(get_the_title($neo_pp->ID)); ?>" loading="lazy" style="width:100%;height:100%;object-fit:contain;padding:12px;display:block"></a>
<?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

  <footer id="contact" style="background:linear-gradient(115deg,#020d17,#06223a 55%,#0a3050);color:#fff">
    <div class="neo-foot-grid" style="max-width:1280px;margin:0 auto;padding:64px 44px 30px">
      <div style="flex:1 1 280px;min-width:260px">
        <div style="margin-bottom:18px">
          <img src="/wp-content/themes/neo-carrosserie/assets/logo-neo-white.svg" alt="NEO Carrosserie Aigle" style="height:66px;width:auto;display:block">
        </div>
        <p style="font:400 14px/1.6 Manrope;color:#a8a39a;max-width:280px;margin:0;text-wrap:pretty" data-i18n="foot.tag">On redonne des ailes à votre auto, depuis&nbsp;Aigle.</p>
        <div style="display:flex;flex-direction:column;gap:12px;align-items:stretch;margin-top:18px;max-width:280px">
          <span style="display:flex;align-items:center;justify-content:center;gap:11px;font:800 15px Manrope;color:#fff;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);padding:13px 18px;border-radius:14px" data-i18n="swiss"><svg width="22" height="22" viewBox="0 0 32 32" aria-hidden="true"><rect width="32" height="32" rx="5" fill="#D52B1E"></rect><rect x="13.5" y="6" width="5" height="20" fill="#fff"></rect><rect x="6" y="13.5" width="20" height="5" fill="#fff"></rect></svg>Entreprise suisse</span>
          <a href="tel:+41215335656" style="display:flex;align-items:center;gap:13px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;padding:14px 20px;border-radius:14px">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg>
            <span><span style="display:block;font:600 11px Manrope;opacity:.85">Appeler maintenant</span><span style="display:block;font:800 19px Archivo">021 533 56 56</span></span>
          </a>
          <a href="https://wa.me/41789545003" target="_blank" rel="noopener" style="display:flex;align-items:center;gap:13px;text-decoration:none;background:#25D366;color:#fff;padding:14px 20px;border-radius:14px">
            <svg width="22" height="22" viewBox="0 0 32 32" fill="#fff" aria-hidden="true"><path d="M16 3C9.4 3 4 8.3 4 14.9c0 2.3.7 4.5 1.9 6.4L4 29l7.9-1.8c1.8 1 3.9 1.5 6.1 1.5h.1c6.6 0 11.9-5.3 11.9-11.9C30 8.3 24.6 3 18 3h-2zm.1 2.2c5.5 0 9.8 4.4 9.8 9.7s-4.4 9.7-9.8 9.7c-2 0-3.9-.6-5.5-1.6l-.4-.2-4 .9.9-3.9-.3-.4c-1.1-1.7-1.7-3.6-1.7-5.5 0-5.3 4.4-9.7 9.8-9.7z"/></svg>
            <span><span style="display:block;font:600 11px Manrope;opacity:.9">Écrire sur WhatsApp</span><span style="display:block;font:800 19px Archivo">+41 78 954 50 03</span></span>
          </a>
        </div>
        <div style="margin-top:22px">
          <div style="font:800 11px Manrope;letter-spacing:.14em;text-transform:uppercase;color:#F2A23F;margin-bottom:11px" data-i18n="foot.social">Suivez-nous</div>
          <div class="neo-soc-row" style="display:flex;gap:10px;flex-wrap:wrap">
            <a class="neo-soc" href="https://www.instagram.com/neocarrosserie/" target="_blank" rel="noopener" aria-label="Instagram" title="Instagram"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1.1" fill="currentColor" stroke="none"/></svg></a>
          </div>
        </div>
      </div>
      <div style="flex:0 1 220px">
        <div style="font:800 12px Manrope;letter-spacing:.14em;text-transform:uppercase;color:#F2A23F;margin-bottom:16px" data-i18n="foot.contact">Contact</div>
        <div style="font:500 14px/2 Manrope;color:#d8d3ca">NEO Carrosserie<br>Chem. de St-Triphon 22<br>1860 Aigle</div>
        <a href="https://www.neo-carrosserie.ch" style="display:block;font:500 14px Manrope;color:#F2A23F;text-decoration:none;margin-top:12px">www.neo-carrosserie.ch</a>
      </div>
      <div style="flex:0 1 200px">
        <div style="font:800 12px Manrope;letter-spacing:.14em;text-transform:uppercase;color:#F2A23F;margin-bottom:16px" data-i18n="foot.hours">Horaires</div>
        <div style="font:500 14px/1.9 Manrope;color:#d8d3ca"><span data-i18n="foot.hours1">Lun – Ven&nbsp;&nbsp;08h00 – 17h30</span><br><span data-i18n="foot.hours2">Sam – Dim&nbsp;&nbsp;fermé</span></div>
      </div>
      <div style="flex:0 1 210px">
        <div style="font:800 12px Manrope;letter-spacing:.14em;text-transform:uppercase;color:#F2A23F;margin-bottom:16px" data-i18n="foot.services">Nos prestations</div>
        <div style="display:flex;flex-direction:column;gap:9px">
          <a href="/services/" style="font:500 14px Manrope;color:#d8d3ca;text-decoration:none">Tous nos services</a>
          <a href="/pare-brise/" style="font:500 14px Manrope;color:#d8d3ca;text-decoration:none">Remplacement de pare-brise</a>
          <a href="/debosselage/" style="font:500 14px Manrope;color:#d8d3ca;text-decoration:none">Débosselage sans peinture</a>
          <a href="/zone-intervention/" style="font:500 14px Manrope;color:#d8d3ca;text-decoration:none">Zone d'intervention</a>
        </div>
      </div>
      <div style="flex:0 1 220px">
        <div style="font:800 12px Manrope;letter-spacing:.14em;text-transform:uppercase;color:#F2A23F;margin-bottom:16px" data-i18n="foot.info">Informations</div>
        <div style="display:flex;flex-direction:column;gap:9px">
          <a href="/cgv/" style="font:500 14px Manrope;color:#d8d3ca;text-decoration:none" data-i18n="foot.cgv">CGV – Conditions Générales de Vente</a>
          <a href="/impressum/" style="font:500 14px Manrope;color:#d8d3ca;text-decoration:none" data-i18n="foot.impressum">Impressum – Mentions légales</a>
          <a href="/protection-donnees/" style="font:500 14px Manrope;color:#d8d3ca;text-decoration:none" data-i18n="foot.privacy">Déclaration de protection des données</a>
          <a href="/livraison-retours/" style="font:500 14px Manrope;color:#d8d3ca;text-decoration:none" data-i18n="foot.delivery">Livraison &amp; Retours</a>
          <a href="/faq/" style="font:500 14px Manrope;color:#d8d3ca;text-decoration:none" data-i18n="foot.faq">FAQ – Questions fréquentes</a>
          <a href="/conditions-utilisation/" style="font:500 14px Manrope;color:#d8d3ca;text-decoration:none" data-i18n="foot.terms">Conditions d'utilisation</a>
        </div>
      </div>
    </div>
    <div style="border-top:1px solid rgba(255,255,255,.1)"><div style="max-width:1280px;margin:0 auto;padding:20px 44px;font:500 12px Manrope;color:#8a857c" data-i18n="foot.copy">© 2026 NEO Carrosserie Aigle. Tous droits réservés.</div></div>
  </footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
