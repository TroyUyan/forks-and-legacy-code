<?php get_header(); ?>

<div class="featuredimage">
	<?php 
		# Featured Image
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} 
	?>
</div>

<div class="divider-blue"></div>

<div class="whiteslide">
	<div class="pagewrapper">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
  the_content(); // displays whatever you wrote in the wordpress editor
  endwhile; endif; //ends the loop
  ?>

	</div><!--end pagewrapper-->
	<div class="clear"></div>
</div><!--end whiteslide-->

<div class="divider-green"></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>