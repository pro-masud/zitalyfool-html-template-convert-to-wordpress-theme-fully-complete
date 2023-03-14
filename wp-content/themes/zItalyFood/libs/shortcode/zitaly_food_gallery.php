<?php 
	
		add_shortcode('zitaly_food_gallery_pros','zitaly_food_gallery_pros');

		function zitaly_food_gallery_pros($one , $two){


			$zitaly_food_galleryp = shortcode_atts([

				'title'		=> ''

				],$one);


			ob_start();

			?>	
					<?php 
							$post_gallery = new WP_Query([
								'post_type'			=> 'zitaly_food_galleryt',
								'posts_per_page'	=> 12
							]);
							
					while( $post_gallery ->  have_posts()) : $post_gallery -> the_post(); ?>
					<div class="col-1-4">
						<div class="zoom-container">
							<a href="<?php the_permalink(); ?>">
								<span class="zoom-caption">
									<span><?php the_title(); ?></span>
								</span>
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
					</div>
				<?php endwhile; ?>
	<?php	
			return ob_get_clean();
	}




	add_action('vc_before_init','vc_zitaly_food_gallery');

	function vc_zitaly_food_gallery(){


			vc_map([
				'name'				=> 'Zitaly Food Gallery',
				'base'				=> 'zitaly_food_gallery_pros',
				'category'			=> 'zItaly All Element',
				'params'			=> [
					[
						'param_name'		=> 'title',
						'type'				=> 'textfield',
						'heading'			=> 'Gallery Title'
					]


				]

			]);






	}







 ?>