<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Green Lake
 */

get_header(); ?>



	<div id="primary" class="content-area col-lg-11">
		<main id="main" class="site-main" role="main">

		<h3>Full Archives</h3>
		<?php wp_get_archives('type=postbypost'); ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
