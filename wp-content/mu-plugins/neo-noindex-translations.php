<?php
/**
 * Plugin Name: Neo – noindex des versions /de/ et /it/
 * Description: Les versions allemande et italienne restent accessibles (sélecteur de langue) mais ne sont plus indexées
 *              par Google : décision du 13/10/2026, aucun client germanophone ou italophone. Pour revenir en arrière :
 *              supprimer ce fichier et renommer neo-sitemap-hreflang.php.off en neo-sitemap-hreflang.php.
 */

// Vrai si la requête concerne /de/ ou /it/ (langue TranslatePress ou préfixe d'URL).
function neo_is_noindex_language() {
    global $TRP_LANGUAGE;
    if ( ! empty( $TRP_LANGUAGE ) && in_array( $TRP_LANGUAGE, array( 'de_DE', 'it_IT' ), true ) ) {
        return true;
    }
    $uri = isset( $_SERVER['REQUEST_URI'] ) ? (string) $_SERVER['REQUEST_URI'] : '';
    return (bool) preg_match( '#^/(de|it)(/|\?|$)#', $uri );
}

// Balise meta robots (Yoast, puis WordPress en repli)
add_filter( 'wpseo_robots', function ( $robots ) {
    return neo_is_noindex_language() ? 'noindex, follow' : $robots;
}, 999 );

add_filter( 'wp_robots', function ( $robots ) {
    if ( neo_is_noindex_language() ) {
        unset( $robots['index'] );
        $robots['noindex'] = true;
        $robots['follow']  = true;
    }
    return $robots;
}, 999 );

// En-tête HTTP, valable même si la balise meta est modifiée par un autre plugin
add_action( 'send_headers', function () {
    if ( neo_is_noindex_language() ) {
        header( 'X-Robots-Tag: noindex, follow', true );
    }
}, 1 );

// Plus de balises hreflang (les pages DE/IT ne sont plus indexées)
add_filter( 'trp-exclude-hreflang', '__return_true' );
