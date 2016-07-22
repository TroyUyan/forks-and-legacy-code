<?php
/*
* @package WordPress
* @subpackage TroyWP
*/
?>

<!doctype html>
<!--[if IE 8]> 	<html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<html lang="en">
	<head>
        <?php wp_head(); ?>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Troy Uyan | <?php the_title(); ?></title>
        <link rel="stylesheet" href="http://troyuyan.com/css/reset.css" media="screen">
        <link rel="stylesheet" href="http://troyuyan.com/css/wp/foundation.min.css" media="screen">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
        <link rel="stylesheet" href="http://troyuyan.com/css/wp/medium.css" media="only screen and (min-width: 40.063em)"><!--641px-->
        <link rel="stylesheet" href="http://troyuyan.com/css/wp/large.css" media="only screen and (min-width: 64.063em)"><!--1025px-->
        <script src="http://troyuyan.com/js/wp/modernizr.js"></script>
    </head>
    
	<body>
        
        <!--TEMP-->
        <div class="warning" style="font-size:.9em;text-align:center;background-color:#171515;color:white;padding:2px;">
            <br><p style="color:#eaea32;"><img src="http://troyuyan.com/img/ico/error.png"> Notice: This project was cancelled! This site is not fully functioning or finished.</p>
            <p>You can visit <a href="http://troyuyan.com/">TroyUyan.com</a> to see the current website.</p>
            <p>A list of the working pages on this version is displayed on the <a href="http://troyuyan.com/wp/">homepage</a>.</p>
        </div>
        <div class="clear"></div>
        <!--END TEMP-->
        
        
        
        <div style="z-index:-2;display:none"><h1>Troy Uyan</h1></div><!--h1 title-->
        <div style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/main_banner_troyuyan-site_texture.png);width:100%;height:145px;position:absolute;z-index:-1"></div>
            <div class="pagewrapper"><!--header into PW -->
            <div id="header" class="row">
                    <div class="small-12"><!--main header-->
                        <div id="social">
                            <a href="https://twitter.com/TroyUyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png"></a>
                            <a href="https://www.facebook.com/troy.uyan"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png"></a>
                            <a href="http://troyuyan.com/wp/feed"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/rss.png"></a>
                        </div>
                        <div id="tagline" class="text-right">
                            <p><strong>Web Designer. Developer. Digital Artist.<br>Photographer. Racer. Nerd. Pizza. Gamer. Genki.</strong></p>
                        </div>
                    </div><!--end main header-->
            </div><!--end header-->
            </div>
            
        <div class="greybgfullnav"><!--nav full bg-->
        <div class="pagewrapper"><!--nav into page-->
            <div id="nav" class="row"><!--start nav block-->
                
                <div id="main-nav-small" class="small-12"><!--small main nav-->
                    <div class="margin text-center">
                        <a href="http://troyuyan.com/wp/" class="button round small">Home</a>
                        <a href="#" class="button round small">About</a>
                        <a href="#" class="button round small">Portfolio</a>
                        <br>
                        <a href="http://troyuyan.com/wp/updates/" class="button round small">Updates</a>
                        <a href="http://troyuyan.com/wp/contact/" class="button round small">Contact</a>
                    </div>
                </div><!--end small nav-->                
                
                
                <div id="main-nav-med" class="small-12"><!--med main nav-->
                    <div class="margin text-center">
                        <a href="http://troyuyan.com/wp/" class="button round">Home</a>&nbsp;
                        <a href="#" class="button round">About</a>&nbsp;
                        <a href="#" class="button round">Portfolio</a>&nbsp;
                        <a href="http://troyuyan.com/wp/updates/" class="button round">Updates</a>&nbsp;
                        <a href="http://troyuyan.com/wp/contact/" class="button round">Contact</a>
                        <br>
                        <a href="#" class="button round small">Web Development</a>
                        <a href="http://troyuyan.com/wp/portfolio/graphic-design/" class="button round small">Graphic Design</a>
                        <a href="#" class="button round small">Photography</a>
                        <span id="extrasubnav"><!--kick-in sub nav-->
                        <a href="#" class="button round small">Racing</a>
                        <a href="#" class="button round small">Gaming</a>
                        <a href="#" class="button round small">Experiments</a>
                        </span>
                    </div>
                </div><!--end medium nav-->
            </div><!--end nav-->
            </div><!--end nav into page-->
            </div><!--end greybgfull-->

        <div id="pagewrapper"><!--begin content section within PW-->
    
            <div id="mainarea" class="row pad"><!--row with content and sidebar-->
                <div id="content" class="small-12 medium-8">