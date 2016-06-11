<?php
/**
 * @package WordPress
 * @subpackage wp-starter-template
 */

// Register Three Menus: Main Menu, Sub Menu, Footer Menu
function register_my_menus() {
  register_nav_menus(
    array( 'main-menu' => __( 'Main Menu' ), 'sub-menu' => __( 'Sub Menu'), 'footer-menu' => __( 'Footer Menu') )
  );
}
add_action( 'init', 'register_my_menus' );

// SIDEBAR REGISTRATION 1: Register two Sidebars
if ( function_exists('register_sidebar') )
    register_sidebars(2);

// SIDE BAR REGISTRATION 2: Register Customized Sidebars with Widget Names and Descriptions
// Widget Support
function my_register_sidebars() {
  /* Register the Home sidebar */
  register_sidebar(
    array(
      'id' => 'home-sidebar',
      'name' => __( 'Home Sidebar' ),
      'description' => __( 'Sidebar unique to the home page' ),
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    )
  );

  /* Register the Site sidebar */
  register_sidebar(
    array(
      'id' => 'site-sidebar',
      'name' => __( 'Site Sidebar' ),
      'description' => __( 'Sidebar for the entire site minus home' ),
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    )
  );
}

add_action( 'widgets_init', 'my_register_sidebars' );

// Add Featured Image Support to Posts and Pages
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

// SHORT CODE: LINE
// Using [line] in a post/page will return <div class="line"></div>

function shortcode_line() {
  return '<div class="line"></div>';
}
add_shortcode('line', 'shortcode_line');

/*
#################################################
CUSTOM POST TYPES: Radio Show
#################################################
*/

function my_custom_post_radio() {
  $labels = array(
    'name'                => _x( 'Radio Shows', 'post type general name' ),
    'singular_name'       => _x( 'Radio Show', 'post type singular name' ),
    'add_new'             => _x( 'Add New', 'book' ),
    'add_new_item'        => __( 'Add New Radio Show' ),
    'edit_item'           => __( 'Edit Radio Show' ),
    'new_item'            => __( 'New Radio Show' ),
    'all_items'           => __( 'All Radio Shows' ),
    'view_item'           => __( 'View Radio Show' ),
    'search_items'        => __( 'Search Radio Shows' ),
    'not_found'           => __( 'No radio shows found' ),
    'not_found_in_trash'  => __( 'No radio shows found in the Trash' ),
    'parent_item_colon'   => '',
    'menu_name'           => 'Radio Shows'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds radio shows and radio show specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'custom-fields'),
    'has_archive'   => true
  );
  register_post_type( 'radio-show', $args );
}

add_action( 'init', 'my_custom_post_radio' );

?>