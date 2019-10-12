<?php

// Enqueue/register styles/scripts
function tzantoCodeWP_enqueue() {
    wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:700|Montserrat:normal|Montserrat:300");
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
    wp_enqueue_style('bulma', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style/stylesheet.css');
}
add_action('wp_enqueue_scripts', 'tzantoCodeWP_enqueue');


// Theme support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );


// Menu
register_nav_menus( array(
  'main-menu' => __('Main Menu', 'theme')
  ) );


// Custom image sizes
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);




/* function tzantoCodeWP_widgets_init() {

  register_sidebar( array(
    'name'          => 'Footer 1',
    'id'            => 'footer_1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer 2',
    'id'            => 'footer_2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer 3',
    'id'            => 'footer_3',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => 'sidebar',
    'id'            => 'sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );

}
add_action( 'widgets_init', 'tzantoCodeWP_widgets_init' );
 */
