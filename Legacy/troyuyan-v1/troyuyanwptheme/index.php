<?php
/*
* @package WordPress
* @subpackage TroyWP
*/

get_header(); ?>
    		
<div id="wrap">

 <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <!-- Display the Post's content in a div box. -->
 <div class="entry">
   <?php the_content(); ?>
 </div>

 <!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry buddy, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>