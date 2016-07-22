<?php
/*
Template Name: Front-Page
*/
?>

<?php get_header(); ?>

<?php putRevSlider("homeslider","homepage") ?> 

<div class="divider-blue"></div>
<div class="whiteslide">
	<div class="pagewrapper">
		<?php dynamic_sidebar('frontpage-area1');?>
		<!--content for first text widget here-->

	</div><!--end pagewrapper-->
	<div class="clear"></div>
</div><!--end whiteslide-->

<div class="divider-green"></div>

<div class="blackslide">
	<div class="pagewrapper">
		<?php dynamic_sidebar('frontpage-area2');?>
		<!--content for second text widget here-->

	</div><!--end pagewrapper-->
	<div class="clear"></div>
</div><!--end blackslide-->

<?php get_footer(); ?>