<?php 
add_theme_support( 'post-thumbnails' );
function mytheme_register_nav_menu(){
    register_nav_menus( array( 'mainmenu' => 'mainmenu' ) );
    register_nav_menus( array( 'mobilemenu' => 'mobilemenu' ) );
    }
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

function mvdm_enqueue_styles_scripts() {
    wp_enqueue_style( 'mvdm-theme-style', get_template_directory_uri() . '/style.css', false );
    wp_enqueue_script('mvdm-theme-mobile-menu', get_template_directory_uri() . '/mobile-menu.js');
}
add_action( 'wp_enqueue_scripts', 'mvdm_enqueue_styles_scripts' );

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );