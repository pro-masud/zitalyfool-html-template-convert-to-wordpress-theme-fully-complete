<?php 

	add_action('widgets_init','zitaly_about_us_init');

	function zitaly_about_us_init(){

			register_widget('zitaly_about_us');




	}

 class zitaly_about_us extends WP_Widget{


 		public function __construct(){

 			parent:: __construct('zitaly_about_us',' Zitaly About Us',[

 				'description'			=> 'Sidebar About Us'
 			]);
 		}

 		public function widget($one, $two){ 
 			$title 		=  $two['cb'];
 			$image 		=  $two['img'];
 			$descer 		=  $two['descer'];

 				?>

 			<?php echo $one['before_widget']; ?>
		<?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>

					<div class="wid-content">
						<img src="<?php echo $image; ?>"/>
						<p><?php echo $descer ; ?></p>
					</div>
				</div>
			<?php echo $one['after_widget']; ?>

 		<?php }

 		public function form($two){

 			$title 		=  $two['cb'];
 			$image 		=  $two['img'];
 			$descer 		=  $two['descer'];

 			?>

 			<p>
 				<label>About Us Title</label>
 				<input name="<?php echo $this -> get_field_name('cb') ?>" class="widefat" value="<?php echo $title; ?>" type="text">
 				
 			</p>

 			<p>
 				<label>Select a Image</label>
 				<input id="zitaly_imgas_about" name="<?php echo $this -> get_field_name('img') ?>" class="widefat" value="<?php echo $image; ?>" type="hidden">
 				
 			</p>

 			<p>
 				<button id="zitaly_imgas_about"  class="button button-primary">Upload a Photos</button>
 			</p>

 			<p>
 				<img id="zitaly_imgas_about" style="width:100%;" src="<?php echo $image; ?>" alt="">
 			</p>

 			<p>
 				<label>About Description</label>
 				<textarea name="<?php echo $this -> get_field_name('descer') ?>" class="widefat"><?php echo $descer; ?></textarea>
 				
 			</p>



 	<?php 	}


	





 }



















 ?>