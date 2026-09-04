<?php
/**
 * Plugin Name: Neo Analytics (GA4)
 * Description: Tag Google Analytics 4 (gtag.js) avec valeurs de consentement par defaut refusees (Google Consent Mode v2), et relais first-party (transport_url) vers /g/collect pour contourner les bloqueurs de pub cote navigateur.
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
    <?php
}, 1);
