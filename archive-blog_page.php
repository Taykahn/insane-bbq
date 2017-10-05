<?php
/**
 * Template Name: Archives
 */

get_header();

if ( get_query_var( 'paged' ) ) { 
	$paged = get_query_var( 'paged' ); 
}
elseif ( get_query_var( 'page' ) ) { 
	$paged = get_query_var( 'page' ); 
}
else { 
	$paged = 1; 
}

query_posts('posts_per_page=&paged=' . $paged); 


$query = array( 
	'post_type' => 'post',
	'paged'     => $paged
);
$blog = new WP_Query( $query );

?>

<section id="nav-change" class="two-column row max no-pad">

	<div class="inner-wrapper container">

		<div class="col-md-12">

			<div class="row blog-content">

				<div class="blog-pg-title">

					<h1>Blog</h1>

				</div><!-- end blog-pg-title -->

				<?php if ( $blog->have_posts() ) : ?>

					<?php while ( $blog->have_posts() ) : $blog->the_post() ?>

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

						<div class="blog-img">

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						</div><!-- end blog-img -->

						<p><?php the_content(); ?></p>

					<?php endwhile ?>

					<div class="col-md-12 options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div><!-- end col-md-12 options border-bottom -->

				<?php endif; wp_reset_postdata() ?>

			</div><!--.blog-content-->

		</div><!-- end col-md-12 -->

	</div><!-- end inner-wrapper container -->

</section><!-- end two-column row max no-pad -->

<?php get_footer(); ?>