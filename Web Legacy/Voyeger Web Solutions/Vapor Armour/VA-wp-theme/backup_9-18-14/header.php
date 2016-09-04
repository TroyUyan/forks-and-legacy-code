<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
	<title>Vapor Armour | <?php the_title(); ?></title>
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,500'>
	<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_url'); ?>'>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>
<body id="top">
	<div class="bar-area">
		<div class="bar-green bar-cw-slant"></div>
		<div class="bar-blue"></div>
	</div>
	<div id="header">
		<div class="pagewrapper clear">

			<div id="logo">
				<a href="<?php echo get_option ('home');?>"><img src="<?php echo get_theme_mod('logo_image');?>"></a>
			</div>

			<?php
			wp_nav_menu( array(
				'menu'              => 'primary',
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'mainnav',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker())
			);
			?>

	</div><!--end pagewrapper-->
			<div class="slogan-area clear">
				<ul>
					<li><img src="http://test1.vaporarmour.com/wp-content/uploads/2014/09/phone_white.png"> &nbsp;&nbsp;+1-855-437-0446</li>
					<li><img src="http://test1.vaporarmour.com/wp-content/uploads/2014/09/email_white.png"> &nbsp;&nbsp;<a href="mailto:contact@vaporarmour.com">contact@vaporarmour.com</a></li>
					<li><img src="http://test1.vaporarmour.com/wp-content/uploads/2014/09/board-white.png"> &nbsp;&nbsp;<em>"No more ice builup"</em></li>
				</ul>				
			</div><!--end slogan-area-->


	</div><!--end header-->

	<div id="content" class="clear">

		<?php wp_head() ?>