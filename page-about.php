<?php 
/**
 * Template Name: About
 */

get_header(); ?>

	<div id="nav-change" class="container about-page">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="about-header">

					<h1><?php the_title(); ?></h1>

				</div><!-- .about-header --><hr>

				<div class="col-sm-6">

					<div class="about-img">

						<?php the_post_thumbnail(); ?>

					</div><!-- end page-img -->

				</div><!-- .col-sm-6 -->

				<div class="col-sm-6">

					<div class="about-content">

						<p><?php the_content(); ?></p>

					</div><!-- .about-content -->

				</div><!-- .col-sm-6 -->

			<?php endwhile; ?>

		<?php endif; ?>

	</div><!-- #nav-change .container .about-page -->

<?php get_footer(); ?>