<?php



	

	

	register_nav_menus( array(

    'primary' => __( 'Primary Menu', 'VaporArmor' ),

) );



	register_sidebar(array(

		'name' => 'SidebarRight',

	));

	register_sidebar(array(

		'name' => 'SidebarLeft',

	));

if ( function_exists('register_sidebar') )

    register_sidebar(array(

        'name' => 'Footer Widgets',

	      'id' => 'footer-widgets',

        'before_widget' => '<div class="col-3">',

        'after_widget' => '</div>',

        'before_title' => '<h2 class="widgettitle">',

        'after_title' => '</h2>',

    ));


if ( function_exists('register_sidebar') )

    register_sidebar(array(

        'name' => 'Frontpage-Area1',

	      'id' => 'frontpage-area1',

        'before_widget' => '<div class="col-3">',

        'after_widget' => '</div>',

        'before_title' => '<h2 class="widgettitle">',

        'after_title' => '</h2>',

    ));


if ( function_exists('register_sidebar') )

    register_sidebar(array(

        'name' => 'Frontpage-Area2',

	      'id' => 'frontpage-area2',

        'before_widget' => '<div class="col-2">',

        'after_widget' => '</div>',

        'before_title' => '<h2 class="widgettitle">',

        'after_title' => '</h2>',

    ));

  


add_filter('widget_text', 'do_shortcode');


// Allow user to upload featured images
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); // Set for posts and pages


function VA_customize_addon($wp_customize){
  $wp_customize->add_section('VA_colors', array(
    'title' => __('Colors', 'VaporArmour'),
    'description' => 'Modify the theme colors'
  ));
  $wp_customize->add_setting('background_color', array(
    'default' => '#fff',
  ));
  $wp_customize->add_setting('link_color', array(
    'default' => '#fff',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'background_color', array(
    'label' => __('Edit Background Color', 'VaporArmour'),
    'section' => 'VA_colors',
    'settings' => 'background_color'
  ) ));
  $wp_customize->add_control( new WP_Customize_Color_Control ($wp_customize, 'link_color', array(
    'label' => __('Edit Link Color', 'VaporArmour'),
    'section' => 'VA_colors',
    'settings' => 'link_color'
  ) ));	
  //Logo
  $wp_customize->add_section('VA_logo', array(
    'title' => __('Images', 'VaporArmour'),
    'description' => 'Custom Logo'
  ));
  $wp_customize->add_setting('logo_image', array(
    'default' => '#http://test1.vaporarmour.com/VaporArmour_Logo350x84.png',
  )); 
  $wp_customize->add_control( new WP_Customize_Image_Control ($wp_customize, 'logo_image', array(
    'label' => __('Upload Custom Logo', 'VaporArmour'),
    'section' => 'VA_logo',
    'settings' => 'logo_image'
  ) ));	
}
function VaporArmour_css_customizer(){
  ?>
  <style type="text/css">
  	body {background-color:#<?php echo get_theme_mod('background_color');?>;}
	body {color:<?php echo get_theme_mod('link_color');?>;}
  </style>

<?php
}
add_action('wp_head','VaporArmour_css_customizer');
add_action('customize_register','VA_customize_addon');

?>