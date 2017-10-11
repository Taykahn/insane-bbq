<?php
/**
 * Template Name: Footer
 */
?>

</main>

	<footer>

		<div class="banner-navbar" style="background: url( '<?php the_field( 'footer_bkgd', 'option' ) ?>' ) 50%/cover no-repeat;">

			<div class="section-1 container-fluid">

				<div class="col-md-6">

					<div id="footer-nav">

						<?php include( 'includes/footer-navbar.php' ); ?>

					</div><!-- end footer-nav -->

				</div><!-- end col-md-6 -->

				<div class="col-md-6">

					<div id="slogan">

						<p>Remember: If it's crazy good, it's Insane Bar-B-Que!</p>

					</div><!-- end slogan -->

				</div><!-- end col-md-6 -->

			</div><!-- end section-1 -->

			<div class="section-2 container-fluid">

				<div class="copyright">

					<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

				</div><!-- end copyright -->

			</div><!-- end section-2 -->

		</div><!-- end banner-navbar -->

	</footer>

		<?php wp_footer(); ?>

	</body>

</html>