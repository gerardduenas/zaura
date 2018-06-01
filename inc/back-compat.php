<?php
/**
 * Zaura back compat functionality
 *
 * Prevents Zaura from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Zaura
 * @since Zaura 1.0
 */

/**
 * Prevent switching to Zaura on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Zaura 1.0
 */
function zaura_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'zaura_upgrade_notice' );
}
add_action( 'after_switch_theme', 'zaura_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Zaura on WordPress versions prior to 4.7.
 *
 * @since Zaura 1.0
 *
 * @global string $wp_version WordPress version.
 */
function zaura_upgrade_notice() {
	$message = sprintf( __( 'Zaura theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'zaura' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Zaura 1.0
 *
 * @global string $wp_version WordPress version.
 */
function zaura_customize() {
	wp_die( sprintf( __( 'Zaura theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'zaura' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'zaura_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Zaura 1.0
 *
 * @global string $wp_version WordPress version.
 */
function zaura_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Zaura theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'zaura' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'zaura_preview' );
