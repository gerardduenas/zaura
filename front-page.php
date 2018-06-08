<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Zaura
 * @since 1.0
 * @version 1.0
 */

get_header();

get_template_part( 'template-parts/page/content', 'front-page' ); ?>

</div> <!-- #wrapper -->

<?php get_footer(); ?>
