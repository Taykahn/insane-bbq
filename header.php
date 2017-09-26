<?php
/**
* Template Name: Header
*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

	<title>

	<?php wp_title( '|', true, 'right' ); ?>

	<?php bloginfo('name'); ?>

	</title>

	<!-- Google Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Asap" rel="stylesheet">

	<?php wp_head() ?>

	<?php 
		global $post;
		global $mbc_img_path;
		$post_slug = isset( $post->post_name ) ? $post->post_name : null;
		$page_slug = 'page-'.$post_slug;
		$fouc      = 'fouc';
		$classes   = array( $page_slug );
	?>

	</head>

<body <?php body_class( $classes ) ?>>

<?php if ( is_front_page() ) { ?>

<?php } else { ?>

	<?php include ( 'includes/navbar.php' ); ?>

<?php } ?>

<header>

	<div class="header">

		<div class="row">

			<?php if ( is_front_page() ) { ?>

				<div class="banner no-pad" id="dktb-img" style="background: url( '<?php the_field( 'dktb_header_img', 'option' ); ?>' ) 50%/cover no-repeat;">

				<?php } else { ?>

			<?php } ?>

			</div><!-- end site-name -->

		</div><!-- end row -->

	</div><!-- end header -->

</header>











