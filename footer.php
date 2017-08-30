<?php
/**
 * Template Name: Footer
 */
?>

</main><hr>

	<footer>

	<div class="three-column row max no-pad contact-section">

		<div class="col-xs-12 col-md-12">

			<div class="row">

				<div class="col-sm-4 col-md-4">

					<div class="footer-h2 contact-section">

						<h2><?php the_field( 'title_1', 'option' ); ?></h2>

						<p><?php the_field( 'content_1', 'option' ); ?></p>

					</div><!-- end footer-h2 -->

				</div><!-- end col-md-4 -->

				<div class="col-sm-4 col-md-4">

					<div class="footer-h2">

						<h2><?php the_field( 'title_2', 'option' ); ?></h2>

						<p><?php the_field( 'content_2', 'option' ); ?></p>

					</div><!-- end footer-h2 -->

				</div><!-- end col-md-4 -->

				<div class="col-sm-4 col-md-4">

					<div class="footer-h2">

						<h2><?php the_field( 'title_3', 'option' ); ?></h2>

						<p><?php the_field( 'content_3', 'option' ); ?></p>

					</div><!-- end footer-h1 -->

				</div><!-- end col-md-4 -->

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</div><!-- end two-column row no-pad -->

	<div class="copyright">

		<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

	</div><!-- end copyright -->

	</footer>

		<?php wp_footer(); ?>

	</body>

</html>