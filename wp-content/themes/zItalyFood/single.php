<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package honeyHome
 */
get_header();
?>




<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="archive.html">Blog</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">

				<?php while( have_posts()) : the_post() ?>
				<article>
					<div class="art-header">
						<a href="<?php the_permalink(); ?>"><h3>Nam libero tempore, cum soluta nobis est </h3></a>
						<div class="info">Posted on : <?php echo the_time('M D Y'); ?> in: <a href="#"><?php echo the_author(); ?></a></div>
					</div>
					<div class="art-content">
						<?php echo the_post_thumbnail(); ?>
						<p><?php echo the_content(); ?></p>
					</div>
				</article>
				
			<?php endwhile; ?>

			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<!-- get sidebar input now -->
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>