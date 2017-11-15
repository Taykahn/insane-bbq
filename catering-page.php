<?php 
/**
 * Template Name: Catering
 */

get_header(); 

global $post;

$post_id = $post->ID; ?>

<div id="nav-change" >

<section id="catering-page">

<div id="catering-pg-section-one">

	<div class="container-fluid">

		<div class="parallax-catering" style="background-image: url('<?php the_field( 'catering_pg_title_img', $post_id ) ?>')">

			<div class="catering-pg-title">

				<h1>Catering</h1>

			</div><!-- .cartering-pg-title -->

		</div><!-- .parallax-catering-title -->

	</div><!-- .container-fluid -->

</div><!-- #catering-pg-section-one -->

<div id="catering-pg-section-two">

		<div class="col-sm-4 container-fluid">

			<div class="col-1">

				<div class="catering-bkgd-img" style="background: url( '<?php the_field( 'col_1_img', $post_id ) ?>' ) 50%/cover no-repeat;">

					<h2><?php the_field( 'col_1_title', $post_id ); ?></h2>

					<p><?php the_field( 'col_1_content', $post_id ); ?></p>

				</div><!-- .catering-bkgd-img -->

			</div><!-- .col-1 -->

		</div><!-- .col-sm-4 -->

		<div class="col-sm-4 container-fluid">

			<div class="col-2">

				<div class="catering-bkgd-img" style="background: url( '<?php the_field( 'col_2_img', $post_id ) ?>' ) 50%/cover no-repeat;">

					<h2><?php the_field( 'col_2_title', $post_id ); ?></h2>

					<p><?php the_field( 'col_2_content', $post_id ); ?></p>

				</div><!-- .catering-bkgd-img -->

			</div><!-- .col-2 -->

		</div><!-- .col-sm-4 -->

		<div class="col-sm-4 container-fluid">

			<div class="col-3">

				<div class="catering-bkgd-img" style="background: url( '<?php the_field( 'col_3_img', $post_id ) ?>' ) 50%/cover no-repeat;">

					<h2><?php the_field( 'col_3_title', $post_id ); ?></h2>

					<p><?php the_field( 'col_3_content', $post_id ); ?></p>

					<div id="button" class="catering-btn">

						<a href="http://localhost:3000/contact/"<button type="button" class="btn btn-red">Call Now</button></a>

					</div><!-- #button .catering-btn -->

				</div><!-- .catering-bkgd-img -->

			</div><!-- .col-3 -->

		</div><!-- .col-sm-4 -->

</div><!-- #catering-pg-section-two -->

<div id="catering-pg-section-three">

	<div class="container-fluid">

		<div class="parallax-catering" style="background-image: url('<?php the_field( 'catering_pg_title_img', $post_id ) ?>')">

			<div class="catering-pg-bottom">

				

			</div><!-- .cartering-pg-bottom -->

		</div><!-- .parallax-catering -->

	</div><!-- .container-fluid -->

</div><!-- #catering-pg-section-three -->

</section><!-- #catering-page -->

</div><!-- #nav-change -->

<?php get_footer(); ?>










