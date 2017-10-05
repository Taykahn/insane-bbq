<?php 
/**
 * Single
 */

get_header(); ?>

	<div id="nav-change" class="container">

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- end page-header -->

						<?php if ( has_post_thumbnail() ) { ?>

							<div class="col-md-6">

								<div class="sgl-pg-img">

									<?php the_post_thumbnail(); ?>

								</div><!-- end sgl-pg-img -->

							</div><!-- end col-md-6 -->

							<div class="col-md-6">

								<p><?php the_content(); ?></p>

							</div><!-- end col-md-6 -->

						<?php } else { ?>

							<div class="col-md-12">

								<div class="sgl-pg-content-else">

									<p><?php the_content(); ?></p>

								</div><!-- end sgl-pg-content-else -->

							</div><!-- end col-md-12 -->

						<?php } ?>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>