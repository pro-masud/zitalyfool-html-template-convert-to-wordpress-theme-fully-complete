<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package honeyHome
 */

		global $sumon;

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php echo bloginfo('charset'); ?>">
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS

  ================================================== -->
  <link rel="shortcut icon" href="<?php echo $sumon['logofiv']['url']; ?>" type="image/x-icon">
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/acess/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/acess/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/acess/css/slide.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/acess/css/menu.css">
	<!-- Custom Fonts -->
    <link href="<?php echo get_template_directory_uri(); ?>/acess/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/acess/js/html5.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/acess/js/css3-mediaqueries.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<?php if($sumon['pn']): ?>
				<li class="mail"><p><?php echo $sumon['pn']; ?></p></li>
				<?php endif; ?>
				<?php if($sumon['emails']): ?>
				<li class="phone"><p><?php echo $sumon['emails']; ?></p></li>
				<?php endif; ?>
			</ul>
			<ul class="top-social f-right">
				<?php if($sumon['tw']): ?>
				<li><a href="<?php echo esc_url($sumon['tw']); ?>"><i class="fa fa-twitter"></i></a></li>
			<?php endif; ?>
				<?php if($sumon['fb']): ?>
				<li><a href="<?php echo esc_url($sumon['fb']); ?>"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				<?php if($sumon['email']): ?>
				<li><a href="<?php echo esc_url($sumon['email']); ?>"><i class="fa fa-google-plus"></i></a></li>
				<?php endif; ?>
				<?php if($sumon['lin']): ?>
				<li><a href="<?php echo esc_url($sumon['lin']); ?>"><i class="fa fa-linkedin"></i></a></li>
				<?php endif; ?>
				<?php if($sumon['inta']): ?>
				<li><a href="<?php echo esc_url($sumon['inta']); ?>"><i class="fa fa-instagram"></i></a></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<?php if($sumon['logo']): ?>
			<center><div class="logo"><img src="<?php echo $sumon['logo']['url']; ?>"></div></center>
		<?php endif; ?>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<?php if($sumon['heard_text']): ?>
				<h2 class="t-center"> <?php echo $sumon['heard_text']; ?> </h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">


    		<?php echo wp_nav_menu([
    			'theme_location'		=> 'top_menu',
    			'containar'				=> ' ',
    			'menu_class'			=> 'clearfix',
    			'menu_id'				=> ' '



    		]); ?>

<!-- 		<ul class="clearfix">
			<li class="colour-1"><a href="index.html">Home</a></li>
			<li class="colour-2"><a href="menu.html">Menu</a></li>
			<li class="colour-3"><a href="location.html">Location</a></li>
			<li class="colour-4"><a href="archive.html">Blog</a></li>
			<li class="colour-5"><a href="reservation.html">Reservation</a></li>
			<li class="colour-6"><a href="staff.html">Our Staff</a></li>
			<li class="colour-7"><a href="news.html">News</a></li>
			<li class="colour-8"><a href="gallery.html">Gallery</a></li>
		</ul>
 -->

    </nav>
