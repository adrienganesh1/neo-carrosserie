<?php
/**
 * Cart empty page — surcharge thème NEO Carrosserie
 */
defined('ABSPATH') || exit;
?>
<div style="text-align:center;max-width:540px;margin:24px auto 64px">
  <div style="width:78px;height:78px;margin:0 auto 22px;border-radius:20px;display:flex;align-items:center;justify-content:center;background:rgba(242,106,18,.1)">
    <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#F26A12" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="20" r="1.4"/><circle cx="18" cy="20" r="1.4"/><path d="M2 3h3l2.4 12.2a1.6 1.6 0 0 0 1.6 1.3h8.2a1.6 1.6 0 0 0 1.6-1.3L22 7H6"/></svg>
  </div>
  <h2 style="font:800 27px/1.1 Archivo;letter-spacing:-.02em;color:#15140F;margin:0 0 9px">Votre panier est vide</h2>
  <p style="font:400 16px/1.6 Manrope;color:#5E5C57;margin:0 0 28px">Parcourez notre sélection de produits d'entretien auto &amp; bateau, livrés chez vous en Suisse.</p>
  <a href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('shop'))); ?>" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;background:linear-gradient(120deg,#FBB615,#F26A12 55%,#E5390B);color:#fff;font:800 16px Manrope;padding:15px 28px;border-radius:13px;box-shadow:0 14px 30px -12px rgba(229,57,11,.55);transition:transform .18s ease,box-shadow .2s ease" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform=''">
    Découvrir la boutique
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
  </a>
</div>
