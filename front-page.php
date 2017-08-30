<?php 
/**
 * Frontpage
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

<section class="two-column row no-pad container-fluid">

	<div class="row">

		<div class="col-md-12">

			<div class="col-md-6">

				<?php if( have_rows('front_page') ): ?>

					<?php while ( have_rows('front_page') ) : the_row(); ?>

						<div id="fp-content">

							<div id="fp-img" style="background: url( '<?php the_sub_field( 'bkgd_img' ) ?>' ) 50%/cover no-repeat;">

								<a href="<?php the_permalink(); ?>"><h2><?php the_sub_field('title'); ?></h2></a>

								<p><?php the_sub_field('content'); ?></p>

							</div><!-- end fp-img -->

						</div><!-- end fp-content -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-5 -->

			<div class="col-md-6">

				<?php if( have_rows('front_page_2') ): ?>

					<?php while ( have_rows('front_page_2') ) : the_row(); ?>

						<div id="fp-content">

							<div id="fp-img" style="background: url( '<?php the_sub_field( '2_bkgd_img' ) ?>' ) 50%/cover no-repeat;">

								<a href="<?php the_permalink(); ?>"><h2><?php the_sub_field('title_2'); ?></h2></a>

								<p><?php the_sub_field('content_2'); ?></p>

							</div><!-- end fp-img -->

						</div><!-- end fp-content -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-5 -->

		</div><!-- end col-md-12 -->

	</div><!-- end row -->

</section><!-- end row no-pad container-fluid -->


<?php get_footer(); ?>






