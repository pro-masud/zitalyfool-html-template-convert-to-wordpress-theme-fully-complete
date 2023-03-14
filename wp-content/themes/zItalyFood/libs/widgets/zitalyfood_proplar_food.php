<?php 

	add_action('widgets_init','zitaly_poplur_food');

	function zitaly_poplur_food(){

			register_widget('zitaly_poplur_food');




	}

 class zitaly_poplur_food extends WP_Widget{


 		public function __construct(){

 			parent:: __construct('zitaly_poplur_food',' Zitaly Popular Food',[

 				'description'			=> 'Sidebar About Us'
 			]);
 		}

 		public function widget($one, $two){ 
 			$title 		=  $two['cb'];


 				?>
 				<?php if($title): ?>
 			<?php echo $one['before_widget']; ?>
		<?php echo $one['before_title']; ?><?php echo $title; ?><?php echo $one['after_title']; ?>

						<?php

						$popular_food 	= new WP_Query([
							'post_type'			=> 'food_menu',
							'posts_per_page'	=> 5



						]);

						 while( $popular_food -> have_posts()) : $popular_food -> the_post() ?>
						<div class="post">
							<a href="#"><img src="<?php echo get_post_meta( get_the_ID(),'fimg',true); ?>"/></a>
							<div class="wrapper">
							  <h5><a href="#"><?php the_title(); ?></a></h5>
							   <span>$ <?php echo get_post_meta( get_the_ID(),'fmip',true); ?> - $ <?php echo get_post_meta( get_the_ID(),'fmp',true); ?></span>
							</div>
						</div>
					<?php endwhile; ?>

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