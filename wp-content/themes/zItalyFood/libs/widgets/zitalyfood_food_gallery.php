<?php 

	add_action('widgets_init','zitaly_food_gallery');

	function zitaly_food_gallery(){

			register_widget('zitaly_food_gallery');




	}

 class zitaly_food_gallery extends WP_Widget{


 		public function __construct(){

 			parent:: __construct('zitaly_food_gallery',' Zitaly Food Gellary',[

 				'description'			=> 'Sidebar Food Gellary'
 			]);
 		}

 		public function widget($one, $two){ 
 			$title 		=  $two['cb'];


 				?>
 				<?php if($title): ?>
 			<?php echo $one['before_widget']; ?>
		<?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>


					<div class="wid-content promasud">
							<?php 
							$zitaly_food_g = new WP_Query([
								'post_type'				=> 'zitaly_food_galleryt',
								'posts_per_page'		=> 6

							]);

							while( $zitaly_food_g ->  have_posts()) : $zitaly_food_g -> the_post() ?>
								

						
						<a href="#"><?php the_post_thumbnail(); ?></a>
						<?php endwhile; ?>
					</div>





				<?php endif; ?>

		
			<?php echo $one['after_widget']; ?>

 		<?php }

 		public function form($two){

 			$title 		=  $two['cb'];

 			?>

 			<p>
 				<label>Popular Food</label>
 				<input name="<?php echo $this -> get_field_name('cb') ?>" class="widefat" value="<?php echo $title; ?>" type="text">
 				
 			</p>


 	<?php 	}


	





 }



















 ?>