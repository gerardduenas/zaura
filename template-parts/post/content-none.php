<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title">Un esquimal perdut en el desert</h1>
	</header>
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( 'Preparat per escriure el teu primer post? <a href="%1$s">Comença a escriure!</a>.', esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php else : ?>

			<p>No hem trobat el que cercaves, pots provar de buscar-ho</p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
