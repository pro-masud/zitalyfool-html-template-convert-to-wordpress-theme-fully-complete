<?php 
	
		add_shortcode('zitaly_food_title','zitaly_food_title');

		function zitaly_food_title($one , $two){


			$zitaly_food_title = shortcode_atts([

					'title'						=> '',
					'subtitle'					=> '',

				],$one);


			ob_start();
			?>	
	<section class="content-box box-2">		
		<div class="zerogrid">
			<div class="row wrap-box">
				<div class="header">
						<h2><?php echo $zitaly_food_title['title']; ?></h2>
						<hr class="line">
						<span><?php echo $zitaly_food_title['subtitle']; ?></span>
					</div>
				</div>
			</div>
		</section>


							




	<?php	
			return ob_get_clean();
	}




	add_action('vc_before_init','vc_zitaly_food_title');

	function vc_zitaly_food_title(){


			vc_map([
				'name'				=> 'Zitaly Food Title',
				'base'				=> 'zitaly_food_title',
				'category'			=> 'zItaly All Element',
				'params'			=> [
					[
						'param_name'		=> 'title',
						'type'				=> 'textfield',
						'heading'			=> 'Zitylay Food Title'
					],

					[
						'param_name'		=> 'subtitle',
						'type'				=> 'textfield',
						'heading'			=> 'Zitylay Food Subtitle'


					],


				]
			]);






	}







 ?>