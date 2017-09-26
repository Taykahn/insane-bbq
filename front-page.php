<?php 
/**
 * Frontpage
 */

get_header();

global $post;

$post_id = $post->ID; ?>

<section class="row no-pad container-fluid" id="flip-card">

	<div class="row">

		<div class="col-md-12">

			<?php include ( 'includes/navbar.php' ); ?>

			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">

				<div class="flipper">

					<div class="front">

						<div class="banner-2">

							<img src="<?php the_field( 'mb_header_img', 'option' ); ?>" />

						</div><!-- end banner-2 -->

					</div><!-- end front -->

					<div class="back">

						<div class="bk-card-logo">

							<img src="<?php the_field( 'logo', $post_id ); ?>" />

						</div><!-- end bk-card-logo -->

						<div class="flip-content">

							<p><?php the_field( 'bk_header_content', $post_id ); ?></p>

						</div><!-- end flip-content -->

					</div><!-- end back -->

				</div><!-- end flipper -->

			</div><!-- end flip-container -->

		</div><!-- end col-md-12 -->

	</div><!-- end row -->

</section><!-- end two-column row no-pad container-fluid -->

<div id="boxes">

<section class="two-column row no-pad container-fluid">

	<div class="row">

		<div class="col-md-12">

			<div class="col-md-6">

				<div id="about-box">

					<div id="about-img" style="background: url( '<?php the_field( 'about_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

						<div class="fp-titles" style="z-index: 2">

							<a href="http://insane-bbq.dev/about-us/"><button type="button" class="btn btn-md"><h2><?php the_field('about_title', $post_id ); ?></h2></button></a>

						</div><!-- end fp-titles -->

					</div><!-- end about-img -->

				</div><!-- end about-box -->

			</div><!-- end col-md-6 -->

			<div class="col-md-6">

				<div id="events-box">

					<div id="events-img" style="background: url( '<?php the_field( 'events_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

						<div class="fp-titles">

							<a href="http://insane-bbq.dev/events/"><button type="button" class="btn btn-md"><h2><?php the_field('events_title', $post_id ); ?></h2></a></button>

						</div><!-- end fp-titles -->

					</div><!-- end events-img -->

				</div><!-- end events-box -->

			</div><!-- end col-md-6 -->

		</div><!-- end col-md-12 -->

	</div><!-- end row -->

</section><!-- end row no-pad container-fluid -->

<section class="two-column row no-pad container-fluid">

	<div class="row">

		<div class="col-md-12">

			<div class="col-md-6">

				<div id="menu-box">

					<div id="menu-img" style="background: url( '<?php the_field( 'menu_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

						<div class="fp-titles">

							<a href="http://insane-bbq.dev/menu/"><button type="button" class="btn btn-md"><h2><?php the_field('menu_title', $post_id ); ?></h2></a></button>

						</div><!-- end fp-titles -->

					</div><!-- end menu-img -->

				</div><!-- end menu-box -->

			</div><!-- end col-md-6 -->

			<div class="col-md-6">

				<div id="contact-box">

					<div id="contact-img" style="background: url( '<?php the_field( 'contact_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

						<div class="fp-titles">

							<a href="http://insane-bbq.dev/contact-us/"><button type="button" class="btn btn-md"><h2><?php the_field('contact_title', $post_id ); ?></h2></a></button>

						</div><!-- end fp-titles -->

					</div><!-- end contact-img -->

				</div><!-- end contact-box -->

			</div><!-- end col-md-6 -->

		</div><!-- end col-md-12 -->

	</div><!-- end row -->

</section><!-- end row no-pad container-fluid -->

<section class="two-column row no-pad container-fluid">

	<div class="row">

		<div class="col-md-12">

			<div class="col-md-6">

				<div id="product-box">

					<div id="product-img" style="background: url( '<?php the_field( 'product_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

						<div class="fp-titles">

							<a href="http://insane-bbq.dev/products/"><button type="button" class="btn btn-md"><h2><?php the_field('product_title', $post_id ); ?></h2></a></button>

						</div><!-- end fp-titles -->

					</div><!-- end product-img -->

				</div><!-- end product-box -->

			</div><!-- end col-md-6 -->

			<div class="col-md-6">

				<div id="blog-box">

					<div id="blog-img" style="background: url( '<?php the_field( 'blog_bkgd_img', $post_id ) ?>' ) 50%/cover no-repeat;">

						<div class="fp-titles">

							<a href="http://insane-bbq.dev/blog/"><button type="button" class="btn btn-md"><h2><?php the_field('blog_title', $post_id ); ?></h2></a></button>

						</div><!-- end fp-titles -->

					</div><!-- end blog-img -->

				</div><!-- end blog-box -->

			</div><!-- end col-md-6 -->

		</div><!-- end col-md-12 -->

	</div><!-- end row -->

</section><!-- end row no-pad container-fluid -->

</div><!-- end boxes -->

<?php get_footer(); ?>






