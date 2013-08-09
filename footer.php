<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Just For Fun
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'justforfun_credits' ); ?>
			<a href="//amyun.us/mwn/" title="<?php esc_attr_e( 'Domain and hosting provider', 'ybs' ); ?>" rel="hosting-provider"><?php printf( __( 'Hosted by %s', 'ybs' ), 'MWN' ); ?></a>
			<span class="sep"> | </span>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'justforfun' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'justforfun' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %s', 'justforfun' ), '<a href="//www.amyunus.com/themes/?utm_source=footer&amp;utm_medium=theme&amp;utm_campaign=creator" rel="designer">Just For Fun</a>', '' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>