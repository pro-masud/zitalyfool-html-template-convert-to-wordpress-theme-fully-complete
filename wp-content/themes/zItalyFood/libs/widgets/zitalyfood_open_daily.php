<?php 

	add_action('widgets_init','zitalyfood_open_daily');

	function zitalyfood_open_daily(){

			register_widget('zitalyfood_open_daily');




	}

 class zitalyfood_open_daily extends WP_Widget{


 		public function __construct(){

 			parent:: __construct('zitalyfood_open_daily',' Zitaly Open Daily  ',[

 				'description'			=> 'zitaly Open Daily'
 			]);
 		}

 		public function widget($one, $two){ 
 			$title 			=  $two['cb'];
 			$mon 			=  $two['mon'];
 			$tue 			=  $two['tue'];
 			$thu 			=  $two['thu'];
 			$sun 			=  $two['sun'];
 			$textone 			=  $two['textone'];
 			$texttwo 			=  $two['texttwo'];

 				?>
 				<?php if($title): ?>
 			<?php echo $one['before_widget']; ?>
		<?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>


				<p><span>mon.</span> <?php echo $mon; ?></p>
					<p><span>tue.-wed.</span> <?php echo $tue; ?></p>
					<p><span>thu.-sat.</span> <?php echo $thu; ?></p>
					<p><span>sun.</span> <?php echo $sun; ?></p>
					<p><span><?php echo $textone; ?></span></br>
					<?php echo $texttwo; ?></p>

				<?php endif; ?>

		
			<?php echo $one['after_widget']; ?>

 		<?php }

 		public function form($two){

 			$title 			=  $two['cb'];
 			$mon 			=  $two['mon'];
 			$tue 			=  $two['tue'];
 			$thu 			=  $two['thu'];
 			$sun 			=  $two['sun'];
 			$textone 			=  $two['textone'];
 			$texttwo 			=  $two['texttwo'];


 			?>

 			<p>
 				<label>Widget Title</label>
 				<input name="<?php echo $this -> get_field_name('cb') ?>" class="widefat" value="<?php echo $title; ?>" type="text">
 				
 			</p>

 			<p>
 				<label>Mon</label>
 				<input name="<?php echo $this -> get_field_name('mon') ?>" class="widefat" value="<?php echo $mon; ?>" type="text">
 			</p>


 			 <p>
 				<label>Tue</label>
 				<input name="<?php echo $this -> get_field_name('tue') ?>" class="widefat" value="<?php echo $tue; ?>" type="text">
 				
 			</p>


 			 <p>
 				<label>Thu</label>
 				<input name="<?php echo $this -> get_field_name('thu') ?>" class="widefat" value="<?php echo $thu; ?>" type="text">
 				
 			</p>


 			 <p>
 				<label>Sun</label>
 				<input name="<?php echo $this -> get_field_name('sun') ?>" class="widefat" value="<?php echo $sun; ?>" type="text">
 				
 			</p>

 			 <p>
 				<label>Open Daliy Bottom Text One</label>
 				<input name="<?php echo $this -> get_field_name('textone') ?>" class="widefat" value="<?php echo $textone; ?>" type="text">
 				
 			</p>

 			 <p>
 				<label>Open Daliy Bottom Text Two</label>
 				<input name="<?php echo $this -> get_field_name('texttwo') ?>" class="widefat" value="<?php echo $texttwo; ?>" type="text">
 				
 			</p>




 	<?php 	}


	





 }



















 ?>