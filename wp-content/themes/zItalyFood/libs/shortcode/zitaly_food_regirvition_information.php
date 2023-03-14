<?php 
	
		add_shortcode('zitaly_food_information','zitaly_food_information');

		function zitaly_food_information($one , $two){


			$zitaly_food_informationt = shortcode_atts([

					'info_groun'			=> '',
					'info_title'			=> '',
					'info_descrip'			=> '',



				],$one);


			ob_start();
			?>	


					<div class="wrap-col">

						<?php $all_params_groups = $zitaly_food_informationt['info_groun']; 

							$all_param_data	 =	vc_param_group_parse_atts($all_params_groups);

					foreach($all_param_data as $all_single_data) :
				?>

							<h3><?php echo $all_single_data['info_title']; ?></h3>
							<p><?php echo $all_single_data['info_descrip'];  ?></p><br/>


						<?php endforeach; ?>

						</div>



							




	<?php	
			return ob_get_clean();
	}




	add_action('vc_before_init','vc_zitaly_food_information');

	function vc_zitaly_food_information(){


			vc_map([
				'name'				=> 'Zitaly Food Informations',
				'base'				=> 'zitaly_food_information',
				'category'			=> 'zItaly All Element',
				'params'			=> [
					[
						'param_name'			=> 'info_groun',
						'type'					=> 'param_group',
						'heading'				=> 'Regirvition Informations',
						'params'				=> [
							[
								'param_name'		=> 'info_title',
								'type'				=> 'textfield',
								'heading'			=> 'Title'
							],
							[
								'param_name'		=> 'info_descrip',
								'type'				=> 'textarea',
								'heading'			=> 'Description'
							]
						]
					]




				]


			]);






	}







 ?>