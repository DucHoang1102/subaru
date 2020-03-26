<?php

/**
 * Custom for child theme
 * 
 */

if (!function_exists('bazaarlite_postformat_child_function')) {

    function bazaarlite_postformat_child_function() {
        
        if ( get_post_type(get_the_ID())== "qun_l_n_hng" ) {

            $postformats = 'donhang';

            get_template_part( 'core/post-formats/'.$postformats.'-format' );
        
        }
    
    }
    
    add_action( 'bazaarlite_postformat_child','bazaarlite_postformat_child_function', 10, 2 );

}

?>