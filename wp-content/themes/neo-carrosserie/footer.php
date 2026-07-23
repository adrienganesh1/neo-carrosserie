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
            <a class="neo-soc" href="https://www.facebook.com/neocarrosserie" target="_blank" rel="noopener" aria-label="Facebook" title="Facebook"><svg width="19" height="19" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.99 3.66 9.13 8.44 9.88v-6.99H7.9V12h2.54V9.8c0-2.51 1.49-3.89 3.78-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99C18.34 21.13 22 16.99 22 12z"/></svg></a>
            <a class="neo-soc" href="https://www.instagram.com/neocarrosserie/" target="_blank" rel="noopener" aria-label="Instagram" title="Instagram"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1.1" fill="currentColor" stroke="none"/></svg></a>
            <a class="neo-soc" href="https://www.tiktok.com/@neocarrosserie" target="_blank" rel="noopener" aria-label="TikTok" title="TikTok"><svg width="19" height="19" viewBox="0 0 24 24" fill="currentColor"><path d="M16.6 5.82A4.28 4.28 0 0 1 15.54 3h-3.09v12.4a2.59 2.59 0 1 1-2.59-2.6c.27 0 .53.04.78.12V9.66a5.7 5.7 0 0 0-.78-.05c-3.14 0-5.69 2.55-5.69 5.7 0 3.13 2.55 5.68 5.69 5.68 3.14 0 5.69-2.55 5.69-5.68V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3a4.29 4.29 0 0 1-3.25-1.48z"/></svg></a>
            <a class="neo-soc" href="https://www.linkedin.com/company/neo-carrosserie/" target="_blank" rel="noopener" aria-label="LinkedIn" title="LinkedIn"><svg width="19" height="19" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM3 9h4v12H3V9zm7 0h3.8v1.7h.05c.53-1 1.83-2.05 3.77-2.05C21.6 8.65 23 10.9 23 14.1V21h-4v-6.1c0-1.5-.03-3.4-2.1-3.4-2.1 0-2.4 1.6-2.4 3.3V21h-4V9z"/></svg></a>
            <a class="neo-soc" href="https://www.pinterest.com/neocarrosserie/" target="_blank" rel="noopener" aria-label="Pinterest" title="Pinterest"><svg width="19" height="19" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.09 2.46 7.6 5.98 9.14-.08-.7-.16-1.77.03-2.53.17-.7 1.12-4.75 1.12-4.75s-.29-.57-.29-1.42c0-1.33.77-2.32 1.73-2.32.82 0 1.21.61 1.21 1.35 0 .82-.52 2.05-.79 3.19-.23.96.48 1.74 1.42 1.74 1.71 0 3.02-1.8 3.02-4.4 0-2.3-1.65-3.91-4.01-3.91-2.73 0-4.33 2.05-4.33 4.16 0 .82.32 1.71.71 2.19.08.09.09.18.07.28l-.27 1.1c-.04.18-.14.22-.33.13-1.22-.57-1.98-2.35-1.98-3.79 0-3.08 2.24-5.92 6.46-5.92 3.39 0 6.03 2.42 6.03 5.65 0 3.37-2.13 6.09-5.08 6.09-.99 0-1.93-.52-2.25-1.13l-.61 2.33c-.22.85-.82 1.92-1.22 2.57.92.28 1.89.44 2.9.44 5.52 0 10-4.48 10-10S17.52 2 12 2z"/></svg></a>
            <a class="neo-soc" href="https://x.com/NeoCarrosserie" target="_blank" rel="noopener" aria-label="X" title="X (Twitter)"><svg width="19" height="19" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
            <a class="neo-soc" href="https://www.youtube.com/@NeoCarrosserie" target="_blank" rel="noopener" aria-label="YouTube" title="YouTube"><svg width="19" height="19" viewBox="0 0 24 24" fill="currentColor"><path d="M23.5 6.2a3.02 3.02 0 0 0-2.12-2.14C19.5 3.55 12 3.55 12 3.55s-7.5 0-9.38.51A3.02 3.02 0 0 0 .5 6.2C0 8.08 0 12 0 12s0 3.92.5 5.8a3.02 3.02 0 0 0 2.12 2.14c1.88.51 9.38.51 9.38.51s7.5 0 9.38-.51a3.02 3.02 0 0 0 2.12-2.14C24 15.92 24 12 24 12s0-3.92-.5-5.8zM9.55 15.57V8.43L15.82 12z"/></svg></a>
            <a class="neo-soc" href="https://www.threads.com/@neocarrosserie" target="_blank" rel="noopener" aria-label="Threads" title="Threads"><svg width="19" height="19" viewBox="0 0 24 24" fill="currentColor"><path d="M16.9 11.2c-.1 0-.2-.1-.3-.1-.2-3.2-1.9-5-4.8-5h-.1c-1.7 0-3.2.8-4 2.1l1.6 1.1c.6-1 1.6-1.2 2.4-1.2 1 0 1.7.3 2.1.9.3.4.5 1 .6 1.7-.8-.1-1.6-.2-2.5-.1-2.6.1-4.2 1.6-4.1 3.7 0 1 .6 1.9 1.5 2.5.8.5 1.8.7 2.9.7 1.4-.1 2.5-.6 3.3-1.6.6-.8.9-1.7 1.1-3 .7.4 1.2.9 1.5 1.6.5 1.1.6 2.9-.9 4.4-1.3 1.3-2.9 1.9-5.3 1.9-2.7 0-4.7-.9-6-2.6C4.7 16.5 4.1 14.5 4 12c.1-2.5.7-4.5 1.9-6 1.3-1.7 3.3-2.6 6-2.6 2.7 0 4.8.9 6.1 2.6.7.9 1.2 2 1.5 3.3l1.9-.5c-.4-1.6-1-3-1.9-4.1C17.9 2.5 15.3 1.4 12 1.4h-.1c-3.3 0-5.9 1.1-7.5 3.3C2.9 6.6 2.1 9 2 12c.1 3 .9 5.4 2.4 7.3 1.6 2.2 4.2 3.3 7.5 3.3h.1c2.9 0 5-.8 6.7-2.5 2.2-2.2 2.1-4.9 1.4-6.6-.5-1.2-1.5-2.2-2.8-2.9zm-4.9 4.4c-1.2.1-2.5-.5-2.6-1.6-.1-.9.6-1.8 2.7-1.9h.6c.7 0 1.3.1 1.9.2-.2 2.7-1.5 3.2-2.6 3.3z"/></svg></a>
            <a class="neo-soc" href="https://maps.google.com/?cid=10573694802309393209" target="_blank" rel="noopener" aria-label="Google" title="Voir sur Google"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></a>
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
