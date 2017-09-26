<?php 
/**
 * Template Name: About
 */

get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="about-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- end about-header --><hr>

						<div class="about-container">

							<div class="col-md-6">

								<div class="about-img">

									<?php the_post_thumbnail(); ?>

								</div><!-- end page-img -->

							</div><!-- end col-md-6 -->

							<div class="col-md-6">

								<div class="about-content">

									<p><?php the_content(); ?></p>

								</div><!-- end about-content -->

							</div><!-- end col-md-6 -->

						</div><!-- end container -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</div><!-- end container --><hr>

<?php get_footer(); ?>