<?php 



		function  amader_cmb2_box(){


				$cmb2_box 	=  	new_cmb2_box([
					'title'			=> 'Masud Cmb2 Box',
					'id'			=> 'mcb',
					'object_types'	=> ['team']


				]);

				$cmb2_box -> add_field([
					'name'				=> 'User Name',
					'id'				=> 'un',
					'type'				=> 'text'

				]);


				$cmb2_box -> add_field([
					'name'				=> 'Job Title',
					'id'				=> 'jt',
					'type'				=> 'text'

				]);

				$cmb2_box -> add_field([
					'name'				=> 'Description',
					'id'				=> 'des',
					'type'				=> 'textarea'

				]);

				$cmb2_box -> add_field([
					'name'				=> 'Images Upload',
					'id'				=> 'img',
					'type'				=> 'file'

				]);

				$cmb2_box -> add_field([
					'name'				=> 'Facebook Link',
					'id'				=> 'fl',
					'type'				=> 'text'

				]);

				$cmb2_box -> add_field([
					'name'				=> 'Twtter Link',
					'id'				=> 'tl',
					'type'				=> 'text'

				]);

				$cmb2_box -> add_field([
					'name'				=> 'Linkdin Link',
					'id'				=> 'll',
					'type'				=> 'text'

				]);









		}


		add_action('cmb2_init','amader_cmb2_box');













 ?>