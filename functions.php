<?php 

/*
 * functions.php
 * Version: 0.1
 */

// CSS DATEIEN
// ------------------------------- 
function hole_die_css_dateien_in_den_header() 
{ 
// CSS des Themes
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
// CSS fuer den WP Editor
add_editor_style( 'editor-style.css' );
}

add_action('wp_enqueue_scripts', 'hole_die_css_dateien_in_den_header');


?>
