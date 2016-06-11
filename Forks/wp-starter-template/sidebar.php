<?php
/**
 * @package WordPress
 * @subpackage wp-starter-template
 * Template Name:  Sidebar
 */

    <ul id="sidebar_list">
	    <?php dynamic_sidebar( 'sidebar-name' ); ?>

	    <?php
	    	// ALTERNATE SIDEBAR CALL with just the number
	    	dynamic_sidebar(1);
	    ?>
    </ul>
