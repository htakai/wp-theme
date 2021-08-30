<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package undersample
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text'          => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'undersample' ) . '</span> <span class="nav-title">%title</span>',
					'next_text'          => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'undersample' ) . '</span> <span class="nav-title">%title</span>',
					'screen_reader_text' => esc_html__( 'Post Navigation', 'undersample' ),
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
