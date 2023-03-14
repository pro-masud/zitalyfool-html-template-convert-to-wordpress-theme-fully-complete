<?php 
	
		add_shortcode('zitaly_food_menu','zitaly_food_menu');

		function zitaly_food_menu($one , $two){


			$zitaly_food = shortcode_atts([

					'title'				=> '',
					'menu_sulg'			=> '',



				],$one);


			ob_start();
			?>

							<div class="wrap-col">
								<h3><?php echo $zitaly_food['title']; ?></h3>
								<?php 
								$menu_post_pro = new WP_Query([
									'post_type'			=> 'food_menu',
									'posts_per_page'	=> 3,
									'tax_query'			=> [
										[
											'taxonomy'		=> 'menu-category',
											'terms'			=> $zitaly_food['menu_sulg'],
											'field'			=> 'slug'
										],


									]




								]);


								while( $menu_post_pro -> have_posts()) : $menu_post_pro -> the_post() ?>
								<div class="post">
									<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta( get_the_ID(),'fimg',true); ?>"/></a>
									<div class="wrapper">
									  <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
									  <span>$<?php echo get_post_meta( get_the_ID(),'fmip',true); ?> - $<?php echo get_post_meta( get_the_ID(),'fmp',true); ?></span>
									</div>
								</div>
							<?php endwhile; ?>
							</div>




	<?php	
			return ob_get_clean();
	}




	add_action('vc_before_init','vc_zitaly_food_menu');

	function vc_zitaly_food_menu(){


			$menu_all_category	= get_terms('menu-category');

				$menu_cat['- Select Category -']		= '';

			foreach( $menu_all_category as $menu_all_cat_stup ){

				$menu_cat[$menu_all_cat_stup -> name]	= $menu_all_cat_stup -> name;



			}


			$menu_all_slug 	= get_terms('menu-category');

			$menu_cat_slug['- Select Category Post -']		= '';

		foreach( $menu_all_category as $menu_all_slugs ){


			$menu_cat_slug[$menu_all_slugs -> slug ]	= $menu_all_slugs -> slug;



		}


			




			vc_map([
				'name'				=> 'Zitaly Food Menu',
				'base'				=> 'zitaly_food_menu',
				'category'			=> 'zItaly All Element',
				'icon'				=> 'el el-dashbord-mirophone',
				'params'			=> [
					[
						'param_name'		=> 'title',
						'type'				=> 'dropdown',
						'heading'			=> 'Select a Title',
						'value'				=> $menu_cat,


					],

					[
						'param_name'		=> 'menu_sulg',
						'type'				=> 'dropdown',
						'heading'			=> 'Select A Post Category',
						'value'				=> $menu_cat_slug,

					]


				]

			]);






	}







 ?>