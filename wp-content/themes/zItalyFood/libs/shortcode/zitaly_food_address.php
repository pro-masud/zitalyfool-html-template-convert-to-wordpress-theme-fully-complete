<?php 
	
		add_shortcode('zitaly_food_add','zitaly_food_add');

		function zitaly_food_add($one , $two){


			$zitaly_food_maps = shortcode_atts([

				'address_one'		=> '',
				'address_two'		=> '',
				'address_tree'		=> '',

				],$one);


			ob_start();

			?>	

							<div class="wrap-col">
								<h3>Address</h3>
								<p><?php echo $zitaly_food_maps['address_one']; ?></p><br/>
								<h3>Hours Of Operation</h3>
								<?php echo $zitaly_food_maps['address_two']; ?><br/>
								<h3>Contact Info</h3>
								<?php echo $zitaly_food_maps['address_tree']; ?>
							</div>









	<?php	
			return ob_get_clean();
	}




	add_action('vc_before_init','vc_zitaly_food_add');

	function vc_zitaly_food_add(){


			vc_map([
				'name'				=> 'Zitaly Food Address',
				'base'				=> 'zitaly_food_add',
				'category'			=> 'zItaly All Element',
				'params'			=> [
					[
						'param_name'		=> 'address_one',
						'type'				=> 'textarea',
						'heading'			=> 'Address'
					],

					[
						'param_name'		=> 'address_two',
						'type'				=> 'textarea',
						'heading'			=> 'Hours Of Operation'
					],

					[
						'param_name'		=> 'address_tree',
						'type'				=> 'textarea',
						'heading'			=> 'Contact Info'
					]


				]

			]);






	}







 ?>