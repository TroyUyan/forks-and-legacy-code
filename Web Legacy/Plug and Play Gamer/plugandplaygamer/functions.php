<?php

  // load parent theme stylesheet
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
  function theme_enqueue_styles() {
      wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

  }
  // makes sure all episodes are being fed by RSS
     add_filter( 'ssp_feed_number_of_posts', 'ssp_modify_number_of_posts_in_feed' );
     function ssp_modify_number_of_posts_in_feed ( $n ) {
     return 700; // Where 700 is the number of episodes that you would like to include in your RSS feed
}
?>