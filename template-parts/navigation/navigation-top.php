<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Menú principal">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo zaura_get_icon( "menu" );
		echo zaura_get_icon( "x" );
		echo "Menú principal";
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
</nav><!-- #site-navigation -->