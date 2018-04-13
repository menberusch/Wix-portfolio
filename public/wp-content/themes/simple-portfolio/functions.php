<?php

add_action('wp_enqueue_scripts', 'wix_portfolio_files');
// Loading scripts and styles
function wix_portfolio_files() {  
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_style('main-styles', get_stylesheet_uri(), NULL, 1);
    wp_enqueue_script('main-scripts', get_theme_file_uri('/js/scripts-bundled.js'), NULL, 1, true);   
}


add_action( 'init', 'portfolio_post_object' );
// Changing default post type
function portfolio_post_object() {
  add_theme_support( 'post-thumbnails' );

  $get_post_type = get_post_type_object('post');
  $labels = $get_post_type->labels;
  $labels->name = 'Portfolio';
  $labels->singular_name = 'Portfolio';
  $labels->add_new = 'Add new Portfolio Item';
  $labels->add_new_item = 'Add new Portfolio Item';
  $labels->edit_item = 'Edit Portfolio';
  $labels->new_item = 'Portfolio Item';
  $labels->view_item = 'View Portfolio';
  $labels->search_items = 'Search in Portfolio';
  $labels->not_found = 'No Portfolio Items found';
  $labels->not_found_in_trash = 'No Portfolio Items found in Trash';
  $labels->all_items = 'All Portfolio Items';
  $labels->menu_name = 'Portfolio';
  $labels->name_admin_bar = 'Portfolio';
}


add_action('get_header', 'remove_admin_login_header');
// Removing admin-bar css
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
