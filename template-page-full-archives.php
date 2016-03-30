<?php
/**
 * 
 * Template Name: Full Archives Page 
 *
 * @package Fremont Cut
 */

get_header(); ?>

	<div id="primary" class="content-area col-lg-11">
		<main id="main" class="site-main" role="main">

		<p><?php wp_get_archives('type=postbypost'); ?></p>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
