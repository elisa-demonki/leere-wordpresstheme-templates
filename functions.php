<?php 

/*
 * functions.php
 * Version: 0.1
 */

// CSS DATEIEN
// ------------------------------- 
// Info: https://developer.wordpress.org/reference/functions/wp_enqueue_script/

function hole_die_css_files() 
{ 
// CSS des Themes
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
// CSS fuer den WP Editor
add_editor_style( 'editor-style.css' );
}

add_action('wp_enqueue_scripts', 'hole_die_css_files');


?>
