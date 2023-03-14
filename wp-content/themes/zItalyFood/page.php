<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package honeyHome
 */

global $sumon;

	get_header();
?>

<!--////////////////////////////////////Container-->
	<?php if( is_front_page()) : ?>
			<div class="zerogrid devpromax">
		<div class="callbacks_container">
			<ul class="rslides" id="slider4">

				<?php 

					$our_slider 	= new WP_Query([
						'post_type'				=> 'our_slider',
						'posts_per_page'		=> 3



					]);


				while( $our_slider ->  have_posts()) : $our_slider -> the_post(); ?>
				<li>
					<?php the_post_thumbnail(); ?>
					<div class="caption">
						<h2><?php the_title(); ?></h2></br>
						<p><?php the_content(); ?></p>
					</div>
				</li>
			<?php endwhile; ?>

			</ul>
		</div>
	</div>


	<?php endif; ?>




<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">

		<?php if( is_front_page()) : ?>
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<?php if($sumon['fpt']) : ?>
					<h2><?php echo $sumon['fpt']; ?></h2>
				<?php endif; ?>
				<?php if($sumon['fpst']) : ?>
					<span><?php echo $sumon['fpst']; ?></span>
				<?php endif; ?>
				</div>
			</div>
		</section>

		<?php else : ?>


		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>


				<?php if( !is_front_page()) : ?>
				<?php while( have_posts()) : the_post() ?>
				<li><a href="archive.html"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>

	<?php endif; ?>

		<?php if( get_post_meta(get_the_ID(),'sideposi',true) == 'right') : ?>
					<div id="main-content" class="col-2-3">
			<div class="wrap-content">

				<?php while( have_posts()) : the_post() ?>

						<p><?php echo the_content(); ?></p>

				<?php endwhile; ?>

			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<!-- get sidebar input now -->
			<?php get_sidebar(); ?>
		</div>
		<?php elseif( get_post_meta(get_the_ID(),'sideposi',true) == 'left') : ?>

		<div id="sidebar" class="col-1-3">
			<!-- get sidebar input now -->
			<?php get_sidebar(); ?>
		</div>

		<div id="main-content" class="col-2-3">
			<div class="wrap-content">

				<?php while( have_posts()) : the_post() ?>

						<p><?php echo the_content(); ?></p>

				<?php endwhile; ?>

			</div>
		</div>


		<?php elseif(get_post_meta(get_the_ID(),'sideposi',true) == 'full') : ?>
					<div id="main-content" class="col-3-3">
			<div class="wrap-content">

				<?php while( have_posts()) : the_post() ?>

						<p><?php echo the_content(); ?></p>

				<?php endwhile; ?>

			</div>
		</div>

	<?php endif; ?>

	</div>
</section>

<?php get_footer(); ?>