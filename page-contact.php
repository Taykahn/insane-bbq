<?php 
/**
 * Template Name: Contact Page
 */

get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- end page-header -->

						<div class="cnt-pg">

							<div class="col-md-6">

								<div class="contact-page-img">

									<?php the_post_thumbnail(); ?>

									<h2>General Info:</h2>

									<p><?php the_excerpt(); ?></p>

								</div><!-- end page-img -->

							</div><!-- col-md-6 -->

							<div class="col-md-6">

								<div class="contact-content">

									<p><?php the_content(); ?></p>

								</div><!-- end contact-content -->

							</div><!-- end col-md-6 -->

						</div>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>