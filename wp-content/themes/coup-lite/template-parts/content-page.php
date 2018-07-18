<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coup
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
echo do_shortcode('[tm-timeline layout="2" visible-items="1" date-format="4" anchors="true" order="DESC"]');
?>
	<header class="entry-header container container-side">
		<?php the_title( '<h1 class="entry-title big-text">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content container container-small">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'coup' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer container container-small">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'coup' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
