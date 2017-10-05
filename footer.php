<?php
/**
 * Template Name: Footer
 */
?>

</main>

	<footer>

		<div class="banner-navbar" style="background: url( '<?php the_field( 'footer_bkgd', 'option' ) ?>' ) 50%/cover no-repeat;">

		<div class="section-1 container-fluid">

			<div id="footer-nav">

				<?php include( 'includes/footer-navbar.php' ); ?>

			</div><!-- end footer-nav -->

		</div>

		<div class="section-2 container-fluid">

			<div class="copyright">

				<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

			</div><!-- end copyright -->

		</div>

	</footer>

		<?php wp_footer(); ?>

	</body>

</html>