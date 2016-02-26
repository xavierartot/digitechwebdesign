<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


function load_fonts() {
    //wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Roboto:400,300,200,400italic,500,700,100italic|Lato');
  //<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,500,500italic' rel='stylesheet' type='text/css'>
  //<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,400italic' rel='stylesheet' type='text/css'>
    wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Lato:400,700,300,400italic,700italic,900|Lato&Roboto:400,400italic,700,500,500italic
');
    wp_enqueue_style( 'googleFonts');
  }
add_action('wp_print_styles', __NAMESPACE__ . '\\load_fonts');
