<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
	<title>Vapor Armour | <?php the_title(); ?></title>
	<?php wp_enqueue_script ("jquery");?>
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,500'>
	<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_url'); ?>'>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56177864-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

</head>
<body id="top">
	<div id="header">
		<div class="pagewrapper clear" id="logo-container">

			<a href="<?php echo get_option('home');?>" id="logo-link"><img src="<?php echo get_theme_mod('logo_image');?>"></a>
			<?php
				wp_nav_menu(array(
				'container'         => 'nav',));
			?>

		</div><!--end pagewrapper-->

	<div class="slogan-area clear">
		<ul>
			<li><img src="http://test1.vaporarmour.com/wp-content/uploads/2014/09/board-white.png"> &nbsp;&nbsp;<em>"No more ice builup"</em></li>
			<li><img src="http://test1.vaporarmour.com/wp-content/uploads/2014/09/phone_white.png"> &nbsp;&nbsp;+1-855-437-0446</li>
			<li><img src="http://test1.vaporarmour.com/wp-content/uploads/2014/09/email_white.png"> &nbsp;&nbsp;<a href="mailto:contact@vaporarmour.com">contact@vaporarmour.com</a></li>
			
		</ul>				
	</div><!--end slogan-area-->

	<div class="clear"></div>
	</div><!--end header-->

	<div id="content" class="clear">

	<?php wp_head() ?>