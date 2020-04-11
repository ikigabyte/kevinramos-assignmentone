<?php
/**
 * Proper way to enqueue scripts and styles
 */
function web_tech_four_scripts() {

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
    
  
    wp_enqueue_style( 'icon-style', get_template_directory_uri() . '/css/font-style.css' );
    
 
    wp_enqueue_style( 'font-style', 'https://fonts.googleapis.com/css2?family=Merriweather&family=Raleway&display=swap');

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