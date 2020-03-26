<?php 
/**
 * 
 */

if ( ! function_exists( 'bazzarliteone_setup' ) ) {

    function bazzarliteone_setup () {

        require_once( trailingslashit( get_theme_file_path() ) . '/core/admin/customize/customize.php' );

        require_once( trailingslashit( get_theme_file_path() ) . '/core/templates/masonry.php' );
        
        require_once( trailingslashit( get_theme_file_path() ) . '/core/templates/post-formats.php' );
    }

    add_action( 'after_setup_theme', 'bazzarliteone_setup' );
}
?>