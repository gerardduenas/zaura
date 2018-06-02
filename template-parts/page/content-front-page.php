<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Zaura
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'zaura-panel ' ); ?> >



	<div class="panel-content">
		<div class="wrap">
			<header class="entry-header">
                Hello World!

			</header><!-- .entry-header -->

			<div class="entry-content">
                Lorem ipsum dolor sit amet.
			</div><!-- .entry-content -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
