<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<?php

if ( function_exists('wp_body_open') ) {
    wp_body_open();
}

?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bazaar-lite' ); ?></a>

<div id="wrapper">
    
    <div id="header-wrapper">
    
        <header id="header">
        
            <div class="container">
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="row branding-site">
                            <div class="col-md-4 text-left border-border">
                                <div class="row">
                                    
                                    <div class="col-xs-9">

                                        <div id="logo text-text">
                            
                                            <?php bazaarlite_get_logo(); ?> 
                                                            
                                        </div>

                                    </div>

                                    <div class="col-xs-3 trigger-toggle">
                                        
                                        <i class="fa fa-align-justify" aria-hidden="true"></i>

                                    </div>

                                </div>
                                
                            </div>

                            <div class="col-md-5 lienhe">
                                <h4> <i class="fa fa-phone-square" aria-hidden="true"></i> Liên hệ ngay: <b>0913.200.236 - 0967.971.575</b> </h4>
                            </div>

                            <div class="col-md-3 dangkingay">
                                <button class="btn btn-danger <?php echo bazaarlite_setting( 'trangchu_settings_popup_panel' ) ?>"> <i class="fa fa-refresh fa-spin fa-fw"></i> <span class="sr-only">Loading...</span> Đăng ký ứng tuyển </button>
                            </div> 
                        </div>
                    </div>
                
                    <div class="col-md-12 wrap-menu">
    
                        <nav id="mainmenu" class="<?php echo bazaarlite_setting('wip_menu_layout'); ?>">

                            <?php 
                                                
                                wp_nav_menu( array(
                                    'theme_location' => 'main-menu',
                                    'container' => 'false'
                                )); 
                                                
                            ?>
                        
                        </nav>
                            
                    </div>
                    
                </div>
                
            </div>  
            
        </header>
    
    </div>
    
<?php 

    if ( is_front_page() ) {

        if ( bazaarlite_setting('wip_enable_slideshow') == 'on' || !bazaarlite_setting('wip_enable_slideshow') )
            do_action('bazaarlite_header_slideshow');
    
    } else {
    
        do_action('bazaarlite_get_breadcrumb'); 

    }
    
?>

<!-- Menu Toggle button trigger -->
<script>
    (function( $ ) {

        $( '.trigger-toggle i' ).click(function(){

            $( 'nav#mainmenu ul' ).slideToggle( 400, () => {
                if ( $(window).width() > 992 ) {

                }
            } );

        })

        $( window ).resize( () => {
            if ( ( window.innerWidth > window.innerHeight ) && $(window).width() > 992 ) {
                
                $( 'nav#mainmenu ul' ).css('display', 'block');

            }
            else {
                
                $( 'nav#mainmenu ul' ).css('display', 'none');

            }

        } )

    })(jQuery)
</script>