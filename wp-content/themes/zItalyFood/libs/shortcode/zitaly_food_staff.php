<?php 
	
		add_shortcode('zitaly_food_staffr','zitaly_food_staffr');

		function zitaly_food_staffr($one , $two){


			$zitaly_food_staffd = shortcode_atts([

					'staff_img'					=> '',
					'staff_title'				=> '',
					'staff_tw'					=> '',
					'staff_fb'					=> '',
					'staff_lin'					=> '',
					'staff_ints'				=> '',



				],$one);


			ob_start();
			?>				

					<?php 
							 $ourstaff_id = $zitaly_food_staffd['staff_img'];

							  $ourstaffurl =	wp_get_attachment_url($ourstaff_id);
					 ?>
						

					<div class="chef">
							<div class="wrap-col">
								<div class="zoom-container">
									<a href="#">
										<img src="<?php echo $ourstaffurl; ?>" />
									</a>
								</div>
								<h3><?php echo $zitaly_food_staffd['staff_title']; ?></h3>
								<ul class="social t-center">
									<li><a href="<?php echo esc_url($zitaly_food_staffd['staff_tw']); ?>"><i class="fa fa-twitter"></i></a></li>
									<li><a href="<?php echo esc_url($zitaly_food_staffd['staff_fb']); ?>"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo esc_url($zitaly_food_staffd['staff_lin']); ?>"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="<?php echo esc_url($zitaly_food_staffd['staff_ints']); ?>"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
					</div>

							




	<?php	
			return ob_get_clean();
	}




	add_action('vc_before_init','vc_zitaly_food_staff');

	function vc_zitaly_food_staff(){


			vc_map([
				'name'				=> 'Zitaly Food Staff',
				'base'				=> 'zitaly_food_staffr',
				'category'			=> 'zItaly All Element',
				'params'			=> [

					[
						'param_name'		=> 'staff_img',
						'type'				=> 'attach_image',
						'heading'			=> 'Staff Image',

					],

					[
						'param_name'		=> 'staff_title',
						'type'				=> 'textfield',
						'heading'			=> 'Staff Title',

					],

					[
						'param_name'		=> 'staff_tw',
						'type'				=> 'textfield',
						'heading'			=> 'Staff Twitter Link',

					],

					[
						'param_name'		=> 'staff_fb',
						'type'				=> 'textfield',
						'heading'			=> 'Staff Facebook Link',

					],


					[
						'param_name'		=> 'staff_lin',
						'type'				=> 'textfield',
						'heading'			=> 'Staff Linkedin Link',

					],

					[
						'param_name'		=> 'staff_ints',
						'type'				=> 'textfield',
						'heading'			=> 'Staff Instagram Link',

					],



				]

			]);






	}







 ?>