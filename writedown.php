<?php

/*
Plugin Name: Writedown
Plugin URI: https://github.com/mehov/writedown/
Version: 1
Author URI: https://github.com/mehov/writedown/
*/

//wordpress.stackexchange.com/questions/327264/store-post-in-raw-markdown-format-no-html/327270#327270
add_filter( 'user_can_richedit', '__return_false', 50 );

//wordpress.stackexchange.com/questions/327264/store-post-in-raw-markdown-format-no-html/327319#327319
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

//wordpress.stackexchange.com/questions/90065/preserve-white-space-in-page/90982#90982
remove_filter( 'the_content', 'wp_filter_kses' );

//wordpress.org/support/topic/wordpress-now-replaces-the-quotes-with/
add_filter('run_wptexturize', '__return_false');
