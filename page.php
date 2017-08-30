<?php 
/**
 * Page
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

						<div class="page-img">

							<?php the_post_thumbnail(); ?>

						</div><!-- end page-img -->

						<div class="page-content">

							<p><?php the_content(); ?></p>

						</div><!-- end pahe-content -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>