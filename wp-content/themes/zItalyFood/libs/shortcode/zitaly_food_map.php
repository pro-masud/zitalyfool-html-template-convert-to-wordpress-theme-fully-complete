<?php 
	
		add_shortcode('zitaly_food_map','zitaly_food_map');

		function zitaly_food_map($one , $two){


			$zitaly_food_maps = shortcode_atts([

				'maps_code'		=> ''

				],$one);


			ob_start();

			?>	



			<div class="wrap-col">
				<div class="wrap-map"><?php echo $two; ?></div>
			</div>







	<?php	
			return ob_get_clean();
	}




	add_action('vc_before_init','vc_zitaly_food_maps');

	function vc_zitaly_food_maps(){


			vc_map([
				'name'				=> 'Zitaly Food Map',
				'base'				=> 'zitaly_food_map',
				'category'			=> 'zItaly All Element',
				'params'			=> [
					[
						'param_name'		=> 'content',
						'type'				=> 'textarea_html',
						'heading'			=> 'Zitaly Food Map'
					]


				]

			]);






	}







 ?>