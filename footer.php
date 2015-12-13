<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Fremont Cut
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <i><?php bloginfo( 'description' ); ?></i>
			|
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'fremont-cut' ) ); ?>"><?php printf( __( 'Powered by %s', 'fremont-cut' ), 'WordPress' ); ?></a>
			<span class="sep"> & </span>
			<?php echo "Fremont Cut "; ?>
			<?php echo " by <a href='http://danmckeown.info/' rel='designer'>Dan McKeown</a>"; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</div><!-- .megacontainer #containerport -->
</div><!-- #containerzero -->

</body>
</html>
