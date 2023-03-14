<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
				<?php 

				while( have_posts()) : the_post()
				 ?>
				<article>
					<div class="art-header">
						<a href="<?php the_permalink(); ?>"><h3>Nam libero tempore, cum soluta nobis est </h3></a>
						<div class="info">Posted on : <?php echo the_time('M D Y'); ?> in: <a href="#"><?php echo the_tags(); ?></a></div>
					</div>
					<div class="art-content">
						<?php echo the_post_thumbnail(); ?>
						<p><?php echo  wp_trim_words(get_the_content(),120, null ); ?></p>
					</div>
					<a class="button button02" href="<?php the_permalink(); ?>">MORE</a>
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