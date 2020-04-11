<?php
/**
 * Proper way to enqueue scripts and styles
 */
function web_tech_four_scripts() {
    // TODO: Use https://bootstrap.build/app to create a custom bootstrap.min.css to replace the one included, think about changing default colors
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
    
    // TODO: Use https://icomoon.io/ to replace the font-style and icomoon fonts in the css folder to include your logo and custom icons
    wp_enqueue_style( 'icon-style', get_template_directory_uri() . '/css/font-style.css' );
    
    // TODO: Change this to a font pair of your choice (don't forget to update the style in style.css)
    wp_enqueue_style( 'font-style', 'https://fonts.googleapis.com/css?family=Merriweather|Open+Sans&display=swap');

    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.14.7', true );
    
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
}
add_action( 'wp_enqueue_scripts', 'web_tech_four_scripts' );

// Adding Nav Menu
function register_web_tech_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
     )
   );
 }
 add_action( 'init', 'register_web_tech_menus' );