<?php
/*
* @package WordPress
* @subpackage TroyWP
* Template Name: Home
*/

get_header(); ?>

<div id="wrap">
    
<a href="http://troyuyan.com/wp/updates/"><h2>Updates</h2></a>

 <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


 <!-- Display the Title as a link to the Post's permalink. -->
 <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
 <p style="font-size:15px;">Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', '); ?></p>

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
    
<!--Previous / Next page for archive pages (home.php and cat.php)-->    
<div class="navigation"><p><?php posts_nav_link(); ?></p></div>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<!-- BY LINE::
by <?php the_author_posts_link() ?>
-->