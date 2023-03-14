<?php 
	
		add_shortcode('zitaly_food_news','zitaly_food_news');

		function zitaly_food_news($one , $two){


			$zitaly_food_newsp = shortcode_atts([

				],$one);


			ob_start();
			?>	

			<?php 
				$our_new = new WP_Query([
					'post_type'			=> 'our_news',
					'posts_per_page'	=> 1

				]);


			while( $our_new -> have_posts()) : $our_new -> the_post() ?>
				<article>
					<div class="art-header">
						<div class="entry-title"> 
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="info">By <a href="#"><?php echo the_author(); ?></a> on <?php echo the_time('M D, Y'); ?></div>
					</div>
					<div class="art-content">
						<?php the_content(); ?>
					</div>
				</article>

			<?php endwhile; ?> 





				<div class="widget wid-related">
					<div class="wrap-col">
						<div class="wid-header">
							<h5>Related Post</h5>
						</div>
						<div class="wid-content">
							<div class="row">
											<?php 
								$our_news_rel = new WP_Query([
									'post_type'			=> 'our_news',
									'posts_per_page'	=> 3				

								]);


							while( $our_news_rel -> have_posts()) : $our_news_rel -> the_post() ?>
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="<?php  the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
										<h4><a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></h4>
									</div>
								</div>
							<?php endwhile; ?>

							</div>
						</div>
					</div>
				</div>
	

							




	<?php	
			return ob_get_clean();
	}




	add_action('vc_before_init','vc_zitaly_food_news');

	function vc_zitaly_food_news(){


			vc_map([
				'name'				=> 'Zitaly Food Newz',
				'base'				=> 'zitaly_food_news',
				'category'			=> 'zItaly All Element',
				'params'			=> [


				]

			]);






	}







 ?>