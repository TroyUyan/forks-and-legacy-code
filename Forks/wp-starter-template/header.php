<?php
/**
 * @package WordPress
 * @subpackage wp-starter-template
 */

// bloginfo('stylesheet_directory');
// Useful when hardcoding images or scripts
// Reveals the WP directory structure to the your theme directory

?>




<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<title><?php the_title(); ?></title>
</head>

<body>

<?php wp_nav_menu( array( 'theme_location' => 'menu-name' ) ); ?>