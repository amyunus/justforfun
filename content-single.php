<?php
/**
 * @package Just For Fun
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php justforfun_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'justforfun' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'justforfun' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'justforfun' ) );

			if ( ! justforfun_categorized_blog() ) {
				$meta_text = __( '<a href="%3$s" title="Permalink to %4$s" rel="bookmark"><div class="genericon genericon-link"></div></a>', 'justforfun' );
			} else {
				$meta_text = __( '<div class="genericon genericon-category"></div>%1$s. <a href="%3$s" title="Permalink to %4$s" rel="bookmark"><div class="genericon genericon-link"></div></a>', 'justforfun' );
			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'justforfun' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
