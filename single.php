<?php 
/**
 * Single
 */

get_header(); ?>

<div id="nav-change">

<section class="single-page">

	<div class="container">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="page-header">

						<h1><?php the_title(); ?></h1>

					</div><!-- end page-header -->

					<?php if ( has_post_thumbnail() ) { ?>

						<div class="col-sm-6">

							<div class="sgl-pg-img">

								<?php the_post_thumbnail(); ?>

							</div><!-- .sgl-pg-img -->

						</div><!-- .col-sm-6 -->

						<div class="col-sm-6">

							<div class="sgl-pg-content">

								<p><?php the_content(); ?></p>

							</div><!-- .sgl-pg-content -->

						</div><!-- .col-sm-6 -->

					<?php } else { ?>

						<div class="col-sm-12">

							<div class="sgl-pg-content-else">

								<p><?php the_content(); ?></p>

							</div><!-- .sgl-pg-content-else -->

						</div><!-- .col-sm-12 -->

					<?php } ?>

				<?php endwhile; ?>

			<?php endif; ?>

	</div><!-- end container -->

</section>

</div><!-- #nav-change -->

<?php get_footer(); ?>