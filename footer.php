<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Green Lake
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <i><?php bloginfo( 'description' ); ?></i>
			|
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'theme-12' ) ); ?>"><?php printf( __( 'Powered by %s', 'theme-12' ), 'WordPress' ); ?></a>
			<span class="sep"> & </span>
		<!--	Theme: <a class="grey-text text-lighten-3" href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' ); ?>"><?php echo wp_get_theme(); ?></a> version <?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Version' ); ?> -->
			<?php printf( esc_html__( '%1$s  %2$s.', '' ), '', '<a href="http://djmcloud.danieljmckeown.com/theme11">Theme 11</a> by <a href="http://danmckeown.info/" rel="designer">Dan McKeown</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</div><!-- .megacontainer #containerport -->
</div><!-- #containerzero -->

</body>
</html>
