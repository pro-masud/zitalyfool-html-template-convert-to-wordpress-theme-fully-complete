<?php 

	add_action('widgets_init','zitaly_client_about_textimorial');

	function zitaly_client_about_textimorial(){

			register_widget('zitaly_client_about_textimorial');




	}

 class zitaly_client_about_textimorial extends WP_Widget{


 		public function __construct(){

 			parent:: __construct('zitaly_client_about_textimorial',' zitaly client about textimorial ',[

 				'description'			=> 'zitaly client about textimorial'
 			]);
 		}

 		public function widget($one, $two){ 
			$title 			=  $two['cb'];
 			$client_title 	=  $two['client_title'];
 			$desce 			=  $two['desce'];
 			$clientimg 		=  $two['clientimg'];
 				?>
 				<?php if($title): ?>
 			<?php echo $one['before_widget']; ?>
		<?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>


					<div class="row client_pro_customar">
						<img src="<?php echo $clientimg ; ?>">
						<h5><?php echo $client_title ; ?></h5>
						<p><?php echo $desce ; ?></p>
					</div>





				<?php endif; ?>

		
			<?php echo $one['after_widget']; ?>

 		<?php }

 		public function form($two){

 			$title 			=  $two['cb'];
 			$client_title 	=  $two['client_title'];
 			$desce 			=  $two['desce'];
 			$clientimg 			=  $two['clientimg'];

 			?>

 			<p>
 				<label>Widget Title</label>
 				<input name="<?php echo $this -> get_field_name('cb') ?>" class="widefat" value="<?php echo $title; ?>" type="text">
 				
 			</p>

 			<p>
 				<label>Client Title</label>
 				<input name="<?php echo $this -> get_field_name('client_title'); ?>"  class="widefat" value="<?php echo $client_title; ?>" type="text">
 			</p>

 			<p>
 				<label>Client Description</label>
 				<textarea name="<?php echo $this -> get_field_name('desce') ?>" class="widefat"><?php echo $desce; ?></textarea>
 			</p>

 			<p>
 				<label>Select a Image</label>
 				<input id="zitaly_client_img" name="<?php echo $this -> get_field_name('clientimg') ?>" class="widefat" value="<?php echo $clientimg; ?>" type="hidden">
 				
 			</p>

 			<p>
 				<button id="zitaly_client_img"  class="button button-primary">Upload a Photos</button>
 			</p>

 			<p>
 				<img id="zitaly_client_img" style="width:100%;" src="<?php echo $clientimg; ?>" alt="">
 			</p>


 	<?php 	}


	





 }



















 ?>