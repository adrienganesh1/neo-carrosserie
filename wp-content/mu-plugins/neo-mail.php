<?php
/**
 * Plugin Name: NEO — E-mails (expéditeur + pièces jointes formulaire)
 * Description: Nom d'expéditeur lisible et smartcode {neo.attachments} listant les fichiers uploadés (carte grise + photos) en liens cliquables.
 * Version: 1.0
 * Author: NEO Carrosserie
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ───────── Expéditeur des e-mails : « NEO Carrosserie » ───────── */
add_filter( 'wp_mail_from_name', function () {
	return 'NEO Carrosserie';
}, 5 );
add_filter( 'wp_mail_from', function ( $email ) {
	// Même domaine que le site (délivrabilité SPF) ; évite le wordpress@ par défaut.
	return 'info@neo-carrosserie.ch';
}, 5 );

/* ───────── Smartcode {neo.attachments} pour les notifications ───────── */
function neo_attachments_html( $carte, $photos ) {
	$btn   = 'style="display:inline-block;background:#0a3050;color:#ffffff;font-size:13px;font-weight:bold;text-decoration:none;padding:10px 18px;border-radius:8px;margin:0 8px 8px 0;"';
	$links = '';

	$carte_list = array_filter( preg_split( '/\s*,\s*/', (string) $carte, -1, PREG_SPLIT_NO_EMPTY ) );
	foreach ( array_values( $carte_list ) as $i => $u ) {
		$label  = 'Carte grise' . ( $i ? ' ' . ( $i + 1 ) : '' );
		$links .= '<a href="' . esc_url( $u ) . '" ' . $btn . '>' . $label . '</a>';
	}

	$photo_list = array_filter( preg_split( '/\s*,\s*/', (string) $photos, -1, PREG_SPLIT_NO_EMPTY ) );
	foreach ( array_values( $photo_list ) as $i => $u ) {
		$links .= '<a href="' . esc_url( $u ) . '" ' . $btn . '>Photo ' . ( $i + 1 ) . '</a>';
	}

	if ( '' === $links ) {
		return '<span style="font-size:13px;color:#a8a297;">Aucun document joint.</span>';
	}
	return $links;
}

add_filter( 'fluentform/smartcode_group_neo', function ( $value ) {
	// $value = propriété demandée (ex. "attachments" pour {neo.attachments})
	if ( 'attachments' !== $value ) {
		return $value;
	}
	$data  = array();
	$entry = \FluentForm\App\Services\FormBuilder\ShortCodeParser::getEntry();
	if ( is_object( $entry ) && ! empty( $entry->response ) ) {
		$data = json_decode( $entry->response, true );
	}
	return neo_attachments_html(
		$data['carte_grise_url'] ?? '',
		$data['photos_degats_urls'] ?? ''
	);
}, 10, 1 );
