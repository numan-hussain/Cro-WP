<?php
function cro_after_setup(){
    load_theme_textdomain( "cro" );
    add_theme_support( "title-tag" );
    add_theme_support( "post_thumbnails" );
}
add_action( "after_setup_theme", "cro_after_setup" );


function cro_all_css_and_js(){
    wp_enqueue_style( "cro", get_stylesheet_url() );
}
add_action( "wp_enqueue_scripts", "cro_all_css_and_js" );