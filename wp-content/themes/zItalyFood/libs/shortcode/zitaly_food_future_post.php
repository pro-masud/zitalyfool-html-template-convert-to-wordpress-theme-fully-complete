<?php 
	
		add_shortcode('zitaly_food_future_post','zitaly_food_future_post');

		function zitaly_food_future_post($one , $two){


			$zitaly_food_title = shortcode_atts([

				],$one);


			ob_start();
			?>	
	<section class="content-box box-2  kachamoris">		
		<div class="zerogrid">
			<div class="row wrap-box">
					<div class="row">


	

						<?php 

					$feture_post = new WP_Query([
						'post_type'			=> 'our_feture_post',
						'posts_per_page'	=> 6



					]);




					while( $feture_post -> have_posts()) : $feture_post -> the_post(); ?>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon"><?php the_title(); ?><b></b></span>

									<?php 

									$feture_img = wp_get_attachment_url(get_post_thumbnail_id());

									 ?>
									<img style="height:300px; width:100%;" src="<?php echo $feture_img; ?>" alt="">
									<p><?php echo  wp_trim_words( get_the_content(), 25 , false); ?></p>
									<a href="<?php the_permalink(); ?>" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>


					</div>
				</div>
			</div>
		</section>


							




	<?php	
			return ob_get_clean();
	}




	add_action('vc_before_init','vc_zitaly_food_future_post');

	function vc_zitaly_food_future_post(){


			vc_map([
				'name'				=> 'Zitaly Food Future Post',
				'base'				=> 'zitaly_food_future_post',
				'category'			=> 'zItaly All Element',
			]);






	}







 ?>