<?php
/**
 * Plugin Name: NEO — Durcissement sécurité
 * Description: Protections de base : anti-énumération des comptes, XML-RPC désactivé, version masquée, éditeur de fichiers désactivé. Chargé automatiquement (mu-plugin).
 * Version: 1.0
 * Author: NEO Carrosserie
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Désactive l'éditeur de thèmes/plugins dans l'admin (empêche l'injection de code via un compte compromis)
if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
	define( 'DISALLOW_FILE_EDIT', true );
}

/* ───────── Anti-énumération des utilisateurs ───────── */

// Bloque /?author=N pour les visiteurs non connectés (renvoie à l'accueil)
add_action( 'template_redirect', function () {
	if ( is_admin() || is_user_logged_in() ) {
		return;
	}
	if ( isset( $_GET['author'] ) && preg_match( '/^\d+$/', (string) $_GET['author'] ) ) {
		wp_safe_redirect( home_url( '/' ), 301 );
		exit;
	}
}, 0 );

// Neutralise l'endpoint REST des utilisateurs pour les non-connectés
add_filter( 'rest_endpoints', function ( $endpoints ) {
	if ( is_user_logged_in() ) {
		return $endpoints;
	}
	foreach ( array( '/wp/v2/users', '/wp/v2/users/(?P<id>[\d]+)' ) as $route ) {
		if ( isset( $endpoints[ $route ] ) ) {
			unset( $endpoints[ $route ] );
		}
	}
	return $endpoints;
} );

// Uniformise les messages d'erreur de connexion (n'indique pas si le login existe)
add_filter( 'login_errors', function () {
	return __( 'Identifiants incorrects.' );
} );

/* ───────── XML-RPC : désactivé (brute-force / pingback DDoS) ───────── */
add_filter( 'xmlrpc_enabled', '__return_false' );
add_filter( 'xmlrpc_methods', function ( $methods ) {
	unset( $methods['pingback.ping'], $methods['pingback.extensions.getPingbacks'] );
	return $methods;
} );
add_filter( 'wp_headers', function ( $headers ) {
	unset( $headers['X-Pingback'] );
	return $headers;
} );

/* ───────── Masque la version de WordPress ───────── */
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );
