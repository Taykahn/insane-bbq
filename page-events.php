<?php 
/**
 * Template Name: Events
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>


<div id="nav-change" class="container">

	<div class="row" id="events-page">

		<div class="col-md-12">

			<div class="parallax" style="background-image: url( '<?php the_field( 'event_pg_bkgd_img', $post_id ); ?>' )" />

			<div class="event-pg-content">

				<h2><?php the_title(); ?></h2>

				<?php if( have_rows('events_content') ): ?>

					<?php while ( have_rows('events_content') ) : the_row(); ?>

						<h3><?php the_sub_field('event_date'); ?></h3>

						<h3><?php the_sub_field('event_venue'); ?></h3>

						<h3><?php the_sub_field('event_location'); ?></h3>

						<p><?php the_sub_field('event_description'); ?></p><hr>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end event-pg-content -->

		</div><!-- end col-md-12 -->

	</div><!-- end row -->

</div><!-- end container -->

<?php get_footer(); ?>