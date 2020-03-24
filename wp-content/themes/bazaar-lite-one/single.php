<?php 

    /**
     * Wp in Progress
     * 
     * @author WPinProgress
     *
     * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
     * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
     */

    get_header(); 
    
    if ( ( bazaarlite_postmeta('wip_header_sidebar') ) && ( bazaarlite_postmeta('wip_header_sidebar') <> "none" ) ):
    
        do_action('bazaarlite_header_sidebar', bazaarlite_postmeta('wip_header_sidebar'));
    
    endif;
    
?> 

<div id="content" class="container content">

    <?php if ( is_singular('qun_l_n_hng') ) : ?>

        <div class="row">

            <div class="col-md-12">

                <button class="btn btn-danger <?php echo bazaarlite_setting( 'trangchu_settings_popup_panel' ) ?>"> <i class="fa fa-check" aria-hidden="true"></i> Đăng ký tham gia đơn hàng này </button>

            </div>

        </div>

    <?php endif; ?>
    
    <div class="row">
       
        <div class="<?php echo bazaarlite_template('span') . " " . bazaarlite_template('sidebar'); ?>">
            
            <div class="row">
        
                <article <?php post_class(); ?> >
                    
                    <?php while ( have_posts() ) : the_post();
                    
                        do_action('bazaarlite_postformat');
                        wp_link_pages(array('before' => '<div class="wip-pagination">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>') );
            
                    ?>
                    
                </article>
        
                <?php comments_template(); ?>

            </div>
        
        </div>

        <?php 
        
            if ( bazaarlite_template('span') == "col-md-8" ) :
                    
                do_action('bazaarlite_side_sidebar', 'side_sidebar_area'); 
                    
            endif;

            endwhile; 
            
        ?>
           
    </div>
    
</div>

<?php 

    if ( ( bazaarlite_postmeta('wip_bottom_sidebar') ) && ( bazaarlite_postmeta('wip_bottom_sidebar') <> "none" ) ):
    
        do_action('bazaarlite_bottom_sidebar', bazaarlite_postmeta('wip_bottom_sidebar'));
    
    endif;
    
    get_footer(); 
    
?>