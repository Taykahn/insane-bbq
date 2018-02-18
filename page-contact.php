<?php 
/**
 * Template Name: Contact Page
 */

get_header(); ?>

	<div id="nav-change" class="container">

		<div class="contact-pg">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="contact-pg-header">

						<h1><?php the_title(); ?></h1>

					</div><!-- .contact-pg-header -->

					<div class="col-sm-6">

						<div class="contact-pg-lt-content">

							<?php the_post_thumbnail(); ?>

								<h2>General Info:</h2>

								<p><?php the_excerpt(); ?></p>

						</div><!-- .contact-pg-lt-content -->

					</div><!-- col-sm-6 -->

					<div class="col-sm-6">

						<div class="contact-content">

							<p><?php the_content(); ?></p>

						</div><!-- .contact-content -->

					</div><!-- .col-sm-6 -->

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .contact-pg -->

	</div><!-- #nav-change .container -->

<?php get_footer(); ?>