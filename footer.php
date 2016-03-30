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

	<footer id="colophon" class="site-footer site-info" role="contentinfo">
		<p class="credit">
					<?php printf(	//	 via: https://github.com/justintadlock/stargazer/blob/master/footer.php#L16-L20
						// Translators: 1 is current year, 2 is site name/link, 3 is WordPress name/link, and 4 is theme name/link. */
						__( 'Copyright &#169; %1$s %2$s. Powered by %3$s and %4$s.', 'stargazer' ),
						date_i18n( 'Y' ), fremont_cut_get_site_link(), fremont_cut_get_wp_link(), fremont_cut_get_theme_link()
					); ?>
		</p><!-- .credit -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</div><!-- .megacontainer #containerport -->
</div><!-- #containerzero -->

</body>
</html>
