<?php
/**
 * The archives template file.
  *
  * This is the file to handle archives pages, tag and category pages, and more
  *
  * @package Theme 12
  */

 get_header(); ?>

 	<div id="primary" class="content-area col-lg-11">
 		<main id="main" class="site-main" role="main">

 		<?php if ( have_posts() ) : ?>

 			<?php /* Start the Loop */ ?>
 			<?php while ( have_posts() ) : the_post(); ?>
                <?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    	the_post_thumbnail();
                    }
                ?>
 				<?php
 					/* Include the Post-Format-specific template for the content.
 					 * If you want to override this in a child theme, then include a file
 					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
 					 */
 					get_template_part( 'content', get_post_format() );
 				?>

 			<?php endwhile; ?>
            <div id="archives_pages_links" class="pagination_nav">
     			<?php the_posts_pagination(); ?>
            <div>

 		<?php else : ?>

 			<?php get_template_part( 'content', 'none' ); ?>

 		<?php endif; ?>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php get_sidebar(); ?>
 <?php get_footer(); ?>
