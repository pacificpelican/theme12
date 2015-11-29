<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Theme 12
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <i><?php bloginfo( 'description' ); ?></i>
			|
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'theme-12' ) ); ?>"><?php printf( __( 'Powered by %s', 'theme-12' ), 'WordPress' ); ?></a>
			<span class="sep"> & </span>
			<?php echo "Theme 12 "; ?>
			<?php echo " by <a href='http://danmckeown.info/' rel='designer'>Dan McKeown</a>"; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</div><!-- .megacontainer #containerport -->
</div><!-- #containerzero -->

</body>
</html>
