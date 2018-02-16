<?php
//short code ----------
function shortcode_templateurl() {
    return get_template_directory_uri();
}
add_shortcode('template_url', 'shortcode_templateurl');

//　改行の時に自動的にPタグが挿入されるのを防ぐ
remove_filter('the_content', 'wpautop');

// This theme uses wp_nav_menu() in one location.
     register_nav_menus( array(
      'gnav' => 'グローバルメニュー'
     ) );

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
