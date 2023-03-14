<?php 

	add_action('widgets_init','zitaly_location_widgets');

	function zitaly_location_widgets(){

			register_widget('zitaly_location_widgets');




	}

 class zitaly_location_widgets extends WP_Widget{


 		public function __construct(){

 			parent:: __construct('zitaly_location_widgets',' Zitaly Location  ',[

 				'description'			=> 'zitaly Location'
 			]);
 		}

 		public function widget($one, $two){ 
			$title 			=  $two['cb'];
 			$desce 			=  $two['desce'];
 				?>
 				<?php if($title): ?>
 			<?php echo $one['before_widget']; ?>
		<?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>


					<div class="wrap-map"><?php echo $desce; ?></div>




				<?php endif; ?>

		
			<?php echo $one['after_widget']; ?>

 		<?php }

 		public function form($two){

 			$title 			=  $two['cb'];
 			$client_title 	=  $two['client_title'];
 			$desce 			=  $two['desce'];


 			?>

 			<p>
 				<label>Widget Title</label>
 				<input name="<?php echo $this -> get_field_name('cb') ?>" class="widefat" value="<?php echo $title; ?>" type="text">
 				
 			</p>

 			<p>
 				<label>Client Description</label>
 				<textarea name="<?php echo $this -> get_field_name('desce') ?>" class="widefat"><?php echo $desce; ?></textarea>
 			</p>



 	<?php 	}


	





 }



















 ?>