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

					<?php //	get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( greenlake_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php // _e( 'Most Used Categories', 'fremont-cut' ); ?></h2>
						<ul>
						<?php
					//		wp_list_categories( array(
					//			'orderby'    => 'count',
					//			'order'      => 'DESC',
					//			'show_count' => 1,
					//			'title_li'   => '',
					//			'number'     => 10,
					//		) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php //  FORGET THIS
						/* translators: %1$s: smiley */
				//		$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'fremont-cut' ), convert_smilies( ':)' ) ) . '</p>';
				//		the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php //	the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
