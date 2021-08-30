<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package undersample
 */

?>

	<footer id="colophon" class="site-footer">
			<?php undersample_social_menu(); ?>
		<div class="site-info">
			<?php undersample_footer_menu(); ?>
			<small class="copyright">&copy; 2021 <?php bloginfo( 'name' ); ?>.</small><!-- copyright -->
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'undersample' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'undersample' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'undersample' ), 'undersample', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
