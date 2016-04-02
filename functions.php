<?php 


/*
 * functions.php
 * Version: 0.1
 */


// CSS das Themes
// ------------------------------- 
// Info: https://developer.wordpress.org/reference/functions/wp_enqueue_script/

function hole_die_style_punkt_css() { 
  
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

}

add_action('wp_enqueue_scripts', 'hole_die_style_punkt_css');


// CSS fuer den WP Editor
// ------------------------------- 
// Info: https://developer.wordpress.org/reference/functions/add_editor_style/

function hole_die_editor_minus_style_punkt_css() {
  
  add_editor_style( 'editor-style.css' );
  
}

add_action( 'admin_init', 'hole_die_editor_minus_style_punkt_css' );

?>
