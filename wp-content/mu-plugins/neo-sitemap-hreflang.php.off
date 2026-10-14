<?php
/**
 * TranslatePress sert /de/ et /it/ dynamiquement pour chaque page FR, mais son
 * add-on payant (SEO Pack) qui les déclarerait dans le sitemap Yoast n'est pas
 * installé. On ajoute donc les liens hreflang alternate directement dans le
 * sitemap XML existant, sans dupliquer les URL FR déjà présentes.
 */

add_filter('wpseo_sitemap_urlset', function ($urlset) {
    if (strpos($urlset, 'xmlns:xhtml') === false) {
        $urlset = str_replace('<urlset ', '<urlset xmlns:xhtml="http://www.w3.org/1999/xhtml" ', $urlset);
    }
    return $urlset;
});

add_filter('wpseo_sitemap_url', function ($output, $url) {
    if (empty($url['loc'])) {
        return $output;
    }
    $home = home_url('/');
    if (strpos($url['loc'], $home) !== 0) {
        return $output;
    }
    $path = substr($url['loc'], strlen($home));

    $links = '';
    $links .= "\t\t<xhtml:link rel=\"alternate\" hreflang=\"fr-FR\" href=\"" . esc_url($url['loc']) . "\" />\n";
    foreach (array('de' => 'de-DE', 'it' => 'it-IT') as $slug => $hreflang) {
        $alt = $home . $slug . '/' . $path;
        $links .= "\t\t<xhtml:link rel=\"alternate\" hreflang=\"{$hreflang}\" href=\"" . esc_url($alt) . "\" />\n";
    }

    return str_replace("\t</url>\n", $links . "\t</url>\n", $output);
}, 10, 2);
