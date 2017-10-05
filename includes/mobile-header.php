<?php 

global $post;

$post_id = $post->ID; ?>

<section class="row no-pad container-fluid" id="flip-card">

	<div class="row">

		<div class="col-md-12">

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