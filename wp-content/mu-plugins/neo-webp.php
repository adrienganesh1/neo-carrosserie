<?php
/**
 * Plugin Name: NEO — WebP automatique (GD)
 * Description: Génère une version .webp (image.jpg.webp) pour chaque image uploadée et ses miniatures. Servie via la règle .htaccess de wp-content/uploads. Nettoie les .webp à la suppression.
 * Version: 1.0
 * Author: NEO Carrosserie
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'imagewebp' ) ) {
	return; // GD sans support WebP : on ne fait rien
}

function neo_make_webp( $path, $quality = 80 ) {
	if ( ! $path || ! file_exists( $path ) ) {
		return;
	}
	$ext = strtolower( pathinfo( $path, PATHINFO_EXTENSION ) );
	if ( ! in_array( $ext, array( 'jpg', 'jpeg', 'png' ), true ) ) {
		return;
	}
	$webp = $path . '.webp';
	if ( file_exists( $webp ) && filemtime( $webp ) >= filemtime( $path ) ) {
		return;
	}
	if ( 'png' === $ext ) {
		$img = @imagecreatefrompng( $path );
		if ( $img ) {
			imagepalettetotruecolor( $img );
			imagealphablending( $img, false );
			imagesavealpha( $img, true );
		}
	} else {
		$img = @imagecreatefromjpeg( $path );
	}
	if ( ! $img ) {
		return;
	}
	@imagewebp( $img, $webp, $quality );
	imagedestroy( $img );
}

// À l'upload : convertir l'original + toutes les tailles générées
add_filter( 'wp_generate_attachment_metadata', function ( $metadata, $attachment_id ) {
	$file = get_attached_file( $attachment_id );
	if ( ! $file ) {
		return $metadata;
	}
	neo_make_webp( $file );
	if ( ! empty( $metadata['sizes'] ) ) {
		$dir = dirname( $file );
		foreach ( $metadata['sizes'] as $size ) {
			if ( ! empty( $size['file'] ) ) {
				neo_make_webp( trailingslashit( $dir ) . $size['file'] );
			}
		}
	}
	return $metadata;
}, 20, 2 );

// À la suppression : retirer les .webp associés
add_action( 'delete_attachment', function ( $attachment_id ) {
	$file = get_attached_file( $attachment_id );
	$meta = wp_get_attachment_metadata( $attachment_id );
	$paths = $file ? array( $file ) : array();
	if ( $file && ! empty( $meta['sizes'] ) ) {
		$dir = dirname( $file );
		foreach ( $meta['sizes'] as $size ) {
			if ( ! empty( $size['file'] ) ) {
				$paths[] = trailingslashit( $dir ) . $size['file'];
			}
		}
	}
	foreach ( $paths as $p ) {
		if ( file_exists( $p . '.webp' ) ) {
			@unlink( $p . '.webp' );
		}
	}
} );
