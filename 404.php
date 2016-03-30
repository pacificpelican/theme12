<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Fremont Cut
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header id="f04header" class="page-header">
					<h1 class="page-title"><?php _e( '404 Not Found.', 'fremont-cut' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Nothing was found at this location.', 'fremont-cut' ); ?></p>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
