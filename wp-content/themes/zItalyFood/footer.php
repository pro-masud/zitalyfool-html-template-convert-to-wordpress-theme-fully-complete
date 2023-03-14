<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package honeyHome
 */
	 global $sumon;?>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">


			<?php echo dynamic_sidebar('foooter_textimorial'); ?>

		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			<?php echo $sumon['tcb']; ?>
			<ul class="quick-link f-right">

				<li><a href="<?php echo $sumon['bbl']; ?>"><?php echo $sumon['fbt']; ?></a></li>
				<li><a href="<?php echo $sumon['bbl']; ?>"><?php echo $sumon['fbt']; ?></a></li>
			</ul>
		</div>
	</div>
</footer>


	<!-- js -->

	
</div>
<?php wp_footer();  ?>
</body>
</html>
