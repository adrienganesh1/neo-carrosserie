<?php
/**
 * Plugin Name: Neo Analytics (GA4)
 * Description: Tag Google Analytics 4 (gtag.js) avec valeurs de consentement par defaut refusees (Google Consent Mode v2), relais first-party (transport_url) vers /g/collect pour contourner les bloqueurs de pub cote navigateur, mise a jour du consentement liee au bandeau Complianz, et suivi des clics telephone/WhatsApp comme evenements de conversion.
 */

add_action('wp_head', function () {
    ?>
<!-- Google Consent Mode v2 - valeurs par defaut avant consentement -->
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('consent', 'default', {
  'ad_storage': 'denied',
  'ad_user_data': 'denied',
  'ad_personalization': 'denied',
  'analytics_storage': 'denied',
  'wait_for_update': 500
});
</script>
<!-- Google tag (gtag.js) - Neo Carrosserie GA4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q0ENCY292Y"></script>
<script>
gtag('js', new Date());
gtag('config', 'G-Q0ENCY292Y', {
  transport_url: 'https://www.neo-carrosserie.ch',
  first_party_collection: true
});
</script>
<!-- Relie le consentement reel du bandeau Complianz a Google Consent Mode -->
<script>
document.addEventListener('cmplz_enable_category', function (e) {
  if (!e.detail || !e.detail.category) return;
  if (e.detail.category === 'statistics') {
    gtag('consent', 'update', { 'analytics_storage': 'granted' });
  }
  if (e.detail.category === 'marketing') {
    gtag('consent', 'update', {
      'ad_storage': 'granted',
      'ad_user_data': 'granted',
      'ad_personalization': 'granted'
    });
  }
});
</script>
<!-- Suivi des clics telephone et WhatsApp (actions de conversion) -->
<script>
document.addEventListener('click', function (e) {
  var a = e.target.closest('a');
  if (!a) return;
  var href = a.getAttribute('href') || '';
  if (href.indexOf('tel:') === 0) {
    gtag('event', 'phone_click', { 'phone_number': href.replace('tel:', ''), 'link_text': a.innerText.trim() });
  } else if (href.indexOf('wa.me') !== -1 || href.indexOf('whatsapp.com') !== -1) {
    gtag('event', 'whatsapp_click', { 'link_url': href, 'link_text': a.innerText.trim() });
  }
});
</script>
    <?php
}, 1);
