<?php 
/**
 * Frontpage
 */

get_header();

global $post;

$post_id = $post->ID; ?>

<?php include( 'includes/mobile-header.php' ); ?>

	<section class="section-one no-pad container-fluid">

		<div class="row">

			<div class="container-fluid">

				<div class="col-md-8 col-sm-8 container-fluid">

					<div class="banner" style="background: url( '<?php the_field( 'sec_ra_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

						<div id="fs-sec-one-a">

							<h2><?php the_field( 'sec_ra_title', $post_id ); ?></h2>

							<p><?php the_field( 'sec_ra_content', $post_id ); ?></p>

							<div id="button" class="button-1">

								<a href="http://localhost:3000/catering/"<button type="button" class="btn btn-red">Learn More</button></a>

							</div><!-- end button -->

						</div><!-- end fs-sec-one-a -->

					</div><!-- end banner -->

				</div><!-- end col-md-8 -->

				<div id="nav-change" class="col-md-4 col-sm-4 container-fluid">

					<div class="banner" style="background: url( '<?php the_field( 'sec_lb_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

						<div class="sec-one-b-content">

							<h2><?php the_field( 'sec_lb_title', $post_id ); ?></h2>

							<p><?php the_field( 'sec_lb_content', $post_id ); ?></p>

							<div id="button" class="button-2">

								<a href="http://localhost:3000/menu/"<button type="button" class="btn btn-red">Our Menu</button></a>

							</div><!-- end button -->

						</div><!-- end sec-one-b-content -->

					</div><!-- end banner -->

				</div><!-- end col-md-4 -->

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</section><!-- end section-one row no-pad container-fluid -->

	<section class="section-two no-pad container-fluid">

		<div class="row">

			<div class="container-fluid">

			<div class="parallax" style="background-image: url('<?php the_field( 'sec_five_bkgd_img', $post_id ) ?>')">

			<div class="col-md-4 col-sm-4 container-fluid">

				<div class="fp-col-one">

					<img src="<?php the_field( 'col_1_img', $post_id ); ?>" />

					<h2><?php the_field( 'col_1_title', $post_id ); ?></h2>

					<p><?php the_field( 'col_1_content', $post_id ); ?></p>

				</div><!-- end front-page-column-one -->

			</div><!-- end col-md-4 -->

			<div class="col-md-4 col-sm-4 container-fluid">

				<div class="fp-col-two">

					<img src="<?php the_field( 'col_2_img', $post_id ); ?>" />

					<h2><?php the_field( 'col_2_title', $post_id ); ?></h2>

					<p><?php the_field( 'col_2_content', $post_id ); ?></p>

				</div><!-- end front-page-column-two -->

			</div><!-- end col-md-4 -->

			<div class="col-md-4 col-sm-4 container-fluid">

				<div class="fp-col-three">

					<img src="<?php the_field( 'col_3_img', $post_id ); ?>" />

					<h2><?php the_field( 'col_3_title', $post_id ); ?></h2>

					<p><?php the_field( 'col_3_content', $post_id ); ?></p>

				</div><!-- end front-page-column-three -->

			</div><!-- end col-md-4 -->

		</div><!-- end row -->

	</div><!-- end col-md-12 -->

	</section><!-- end section-five container-fluid -->

	<section class="section-three no-pad container-fluid">

		<div class="row">

			<div class="container-fluid">

				<div class="col-md-4 col-sm-4 container-fluid">

					<div class="banner" style="background: url( '<?php the_field( 'sec_3_lb_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

					<div class="sec-three-a-content">

						<h2><?php the_field( 'sec_3_lb_title', $post_id ); ?></h2>

						<p><?php the_field( 'sec_3_lb_content', $post_id ); ?></p>

						<div id="button" class="button-3">

							<a href="http://localhost:3000/event/"<button type="button" class="btn btn-red">Where We Are</button></a>

						</div><!-- end button -->

					</div><!-- end sec-three-a-content -->

				</div><!-- end col-md-4 -->

			</div><!-- end container-fluid -->

			<div class="col-md-8 col-sm-8 container-fluid">

				<div class="banner" style="background: url( '<?php the_field( 'sec_3_ra_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

					<div class="sec-three-b-content">

						<h2><?php the_field( 'sec_3_ra_title', $post_id ); ?></h2>

						<p><?php the_field( 'sec_3_ra_content', $post_id ); ?></p>

						<div id="button" class="button-4">

							<a href="http://localhost:3000/shop/"<button type="button" class="btn btn-red">The Store</button></a>

						</div><!-- end button -->

					</div><!-- end sec-three-b-content --> 

				</div><!-- end parallax -->

			</div><!-- end col-md-8 -->

		</div><!-- end row -->

	</section><!-- end sectio-three row no-pad container-fluid -->

<?php get_footer(); ?>






