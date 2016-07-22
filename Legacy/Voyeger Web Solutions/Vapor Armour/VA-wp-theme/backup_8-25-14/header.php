<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
	<title>Vapor Armour</title>
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,500'>
	<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_url'); ?>'>
</head>
<body id="top">

<div class="bar-blue"></div>
<div class="bar-green"></div>
<div id="header">
	<div class="pagewrapper clear">

		<div id="logo"><a href="<?php echo get_option ('home');?>"><img src="<?php echo get_theme_mod('logo_image');?>"></div>

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
</div><!--end header-->

<div id="content" class="clear">