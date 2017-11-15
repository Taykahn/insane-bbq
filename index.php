<?php
/**
 * Index
 */

get_header(); ?>

<section id="nav-change" class="row">

	<div class="small-12 columns text-center">

		<div class="leader">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<p><?php the_content(); ?></p>

			<?php endwhile; else : ?>

				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

			<?php endif ?>

		</div><!-- end leader -->

	</div><!-- small-12 columns text-center -->

</section><!-- row -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>