<?php 
/**
 * Menu Page
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

	<div id="nav-change" class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="menu-title">

					<h1><?php the_title(); ?></h1>

				</div><!-- end menu-title -->

				<div class="container">

					<div class="appetizers-section">

						<h2><?php the_field( 'app_title', $post_id ); ?></h2>

						<?php if( have_rows('appetizer_repeater') ): ?>

							<?php while ( have_rows('appetizer_repeater') ) : the_row(); ?>

								<div class="two-column row container-fluid">

									<div class="col-md-6">

										<h3><?php the_sub_field('app_title'); ?></h3>

										<p><?php the_sub_field('app_description'); ?></p>

										<img src="<?php the_sub_field('app_image'); ?>">

									</div><!-- end col-md-6 -->

									<div class="col-md-6">

										<div id="pg-section">

											<p><?php the_sub_field('app_price'); ?></p>

										</div><!-- end pg-section -->

									</div><!-- end col-md-6 -->

								</div><!-- end container -->

							<?php endwhile; ?>

						<?php endif; ?>

					</div><!-- end appetizers-section -->

				</div><!-- end container -->

				<div class="container">

					<div class="entrees-section">

						<h2><?php the_field( 'ent_title', $post_id ); ?></h2>

						<?php if( have_rows('entrees_repeater') ): ?>

							<?php while ( have_rows('entrees_repeater') ) : the_row(); ?>

								<div class="two-column row container-fluid">

									<div class="col-md-6">

										<h3><?php the_sub_field('ent_title'); ?></h3>

										<p><?php the_sub_field('ent_description'); ?></p>

										<img src="<?php the_sub_field('ent_image'); ?>">

									</div><!-- end col-md-6 -->

									<div class="col-md-6">

										<div id="pg-section">

											<p><?php the_sub_field('ent_price'); ?></p>

										</div><!-- end pg-section -->

									</div><!-- end col-md-6 -->

								</div><!-- end container -->

							<?php endwhile; ?>

						<?php endif; ?>

					</div><!-- end entrees-section -->

				</div><!-- end container -->

				<div class="container">

					<div class="sides-section">

						<h2><?php the_field( 'side_title', $post_id ); ?></h2>

						<?php if( have_rows('sides_repeater') ): ?>

							<?php while ( have_rows('sides_repeater') ) : the_row(); ?>

								<div class="two-column row container-fluid">

									<div class="col-md-6">

										<h3><?php the_sub_field('sides_title'); ?></h3>

										<p><?php the_sub_field('sides_description'); ?></p>

										<img src="<?php the_sub_field('sides_image'); ?>">

									</div><!-- end col-md-6 -->

									<div class="col-md-6">

										<div id="pg-section">

											<p><?php the_sub_field('sides_price'); ?></p>

										</div><!-- end pg-section -->

									</div><!-- end col-md-6 -->

								</div><!-- end container -->

							<?php endwhile; ?>

						<?php endif; ?>

					</div><!-- end sides-section -->

				</div><!-- end  container -->

				<div class="container">

					<div  class="desserts-section"> 

						<h2><?php the_field( 'desserts_title', $post_id ); ?></h2>

						<?php if( have_rows('desserts_repeater') ): ?>

							<?php while ( have_rows('desserts_repeater') ) : the_row(); ?>

								<div class="two-column row container-fluid">

									<div class="col-md-6">

										<h3><?php the_sub_field('desserts_title'); ?></h3>

										<p><?php the_sub_field('desserts_description'); ?></p>

										<img src="<?php the_sub_field('desserts_image'); ?>">

									</div><!-- end col-md-6 -->

									<div class="col-md-6">

										<div id="pg-section">

											<p><?php the_sub_field('desserts_price'); ?></p>

										</div><!-- end pg-section -->

									</div><!-- end col-md-6 -->

								</div><!-- end container -->

							<?php endwhile; ?>

						<?php endif; ?>

					</div><!-- end desserts-section -->

				</div><!-- end container -->

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>