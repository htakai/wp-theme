<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undersample
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
if ( ! is_singular() ) :
	?>
	<div class="not-singular">
<?php endif; ?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				undersample_posted_on();
				undersample_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
<?php
if ( ! is_singular() ) :
	?>
	<div class="wrap-contents">
	<?php endif; ?>
	<?php undersample_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if ( is_singular() ) :    // **add**
			the_content();
	else :                  // **add**
		the_excerpt();      // **add**
	endif;                  // **add**
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'undersample' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
<?php
if ( ! is_singular() ) :
	?>
	</div><!-- .wrap-contents -->
<?php endif; ?>
	<footer class="entry-footer">
		<?php undersample_entry_footer(); ?>
	</footer><!-- .entry-footer -->
<?php
if ( ! is_singular() ) :
	?>
	</div><!-- .not-singular -->
<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
