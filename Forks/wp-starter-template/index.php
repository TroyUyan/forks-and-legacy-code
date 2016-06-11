<?php
/**
 * @package WordPress
 * @subpackage wp-starter-template
 * Template Name:  Front Page
 */

get_header(); ?>
    		
<!--THE WORDPRESS LOOP (in a very basic format)-->

    		<?php if (have_posts()) : ?>
    			<?php while (have_posts()) : the_post(); ?>
    				<h1><?php the_title(); ?></h1>
    				<?php the_content(); ?>
    			<?php endwhile; ?>
    			<?php else : ?>
    			<?php endif; ?>

    	
<?php get_sidebar(); ?>
    		
<?php get_footer(); ?>
