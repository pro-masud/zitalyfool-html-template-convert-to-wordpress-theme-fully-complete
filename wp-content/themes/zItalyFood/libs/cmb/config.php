<?php 



		function  amader_cmb2_box(){


				$sidebar_customaization 	=  	new_cmb2_box([
					'title'			=> 'Sidebar Customzation',
					'id'			=> 'sbarcus',
					'object_types'	=> ['page']


				]);


				$sidebar_customaization  -> add_field([
					'name'				=> 'Sidebar Position',
					'id'				=> 'sideposi',
					'type'				=> 'select',
					'options'				=> [
						'full'			=> 'Full',
						'left'			=> 'Left',
						'right'			=> 'Right'				

					]



				]);


				//menu popular food now 
				$zitaly_foodcmb2  = new_cmb2_box([
					'title'			=> 'Popular Food',
					'id'			=> 'ppd',
					'object_types'	=> ['food_menu']



				]);


					$zitaly_foodcmb2 -> add_field([
						'name'			=> 'Food min Price',
						'id'			=> 'fmip',
						'type'			=> 'text_money'


					]);

					$zitaly_foodcmb2 -> add_field([
						'name'			=> 'Food max Price',
						'id'			=> 'fmp',
						'type'			=> 'text_money'


					]);

					$zitaly_foodcmb2 -> add_field([
						'name'			=> 'Food Image',
						'id'			=> 'fimg',
						'type'			=> 'file',


					]);








		}


		add_action('cmb2_init','amader_cmb2_box');













 ?>