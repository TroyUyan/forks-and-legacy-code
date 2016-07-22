<?php
/**
 * Homepage template file
 *
 * @package GeneratePress
 */

get_header(); ?>

	<div id="primary" <?php generate_content_class();?>>
		<main id="main" <?php generate_main_class(); ?>>

		<?php do_action('generate_before_main_content'); ?>

		<div id="latest-podcast">

			<h2 class="section-title">This Week's Podcast</h2>

			<?php /* Get latest podcast (plug-and-play-podcast) */ ?>
			<?php query_posts('category_name=podcasts/plug-and-play-podcast&showposts=1'); ?>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						get_template_part( 'content', get_post_format() );
					?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'no-results', 'index' ); ?>
			<?php endif; ?>

		</div><!-- #latest-podcast -->

		<div class="clear"></div>
		<div id="latest-review">

			<h2 class="section-title">Latest Reviews</h2>

			<?php /* Get latest review (anything in reviews-quicklooks) */ ?>
			<?php query_posts('category_name=reviews-quicklooks&showposts=3'); ?>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						get_template_part( 'content', get_post_format() );
					?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'no-results', 'index' ); ?>
			<?php endif; ?>

		</div><!-- #latest-review -->
		<div id="latest-news">

			<h2 class="section-title">Latest News</h2>

			<?php /*
				Get latest news, event or bonus level (everything else besides brews)
				Events, News, Tech, Unplugged Entertainment
			*/ ?>

			<?php
			  $lastestNews = new WP_Query();
			  $lastestNews->query('cat=988,986,989,1014&showposts=3');
			?>

			<?php if ( $lastestNews->have_posts() ) : ?>
				<?php while ( $lastestNews->have_posts() ) : $lastestNews->the_post(); ?>
					<?php
						get_template_part( 'content', get_post_format() );
					?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'no-results', 'index' ); ?>
			<?php endif; ?>

		</div><!-- #latest-news -->

		<?php do_action('generate_after_main_content'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
do_action('generate_sidebars');
get_footer();