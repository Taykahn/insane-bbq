<?php
/**
 * Template Name: Footer
 */
 ?>

</main>

	<footer>

		<div class="banner-navbar" style="background: url( '<?php the_field( 'footer_bkgd', 'option' ) ?>' ) 50%/cover no-repeat;">

			<div class="section-1 container-fluid">

				<div class="col-sm-5">

					<div id="footer-nav">

						<?php include( 'includes/footer-navbar.php' ); ?>

					</div><!-- .footer-nav -->

				</div><!-- .col-sm-5 -->

				<div class="col-sm-2">

					<div class="footer-logo">

						<img src="<?php the_field( 'footer_logo', 'option' ); ?>" />

					</div><!-- .footer-logo -->

				</div><!-- .col-sm-2 -->

				<div class="col-sm-5">

					<div id="slogan">

						<p>If it's crazy good, it's Insane Bar-B-Que!</p>

					</div><!-- .slogan -->

				</div><!-- .col-sm-5 -->

			</div><!-- .section-1 -->

			<div class="section-2 container-fluid">

				<div class="copyright">

					<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

				</div><!-- .copyright -->

			</div><!-- .section-2 -->

		</div><!-- .banner-navbar -->

	</footer>

		<?php wp_footer(); ?>

	</body>

</html>