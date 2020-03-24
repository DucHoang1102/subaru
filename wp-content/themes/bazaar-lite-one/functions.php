<?php

/**
 *
 *
 *
*/
    // Get at theme parent
    require_once( trailingslashit( get_template_directory() ) . '/core/main.php' );
    
    // Get at child theme
    require_once get_theme_file_path() . '/core/main.php';

?>