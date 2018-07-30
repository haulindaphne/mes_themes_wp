<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coup
 */

?>
<?php
 if ( has_nav_menu( 'private-menu' ) ) : ?>
 <?php 
 wp_nav_menu ( array (
 'theme_location' => 'Menu Privé' ,
 'menu_class' => 'my-private-menu', // classe CSS pour customiser mon menu
 ) ); ?>
 <?php endif;
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--	
<header class="entry-header container container-side">
		<?php /*the_title( '<h1 class="entry-title big-text">', '</h1>' ); */?>
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
	<?php endif; ?>
</article><!-- #post-## -->
