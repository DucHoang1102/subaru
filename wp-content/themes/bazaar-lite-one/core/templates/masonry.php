<?php 

/**
 * Custom for child theme
 * 
 */

if (!function_exists('bazaarlite_masonry_child_function')) {

    remove_action( 'bazaarlite_masonry', 'bazaarlite_masonry_function' );

    function bazaarlite_masonry_child_function() { ?>

        <div class="row masonry">

            <?php
                $args = array(
                    'post_type' => array('qun_l_n_hng'),
                    'cat'       => get_queried_object()->term_id 
                );
                $q = new WP_Query( $args );
            ?>
            
            <?php if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
                
                <article <?php post_class(); ?>>

                    <?php  get_template_part( 'core/post-formats/' . 'donhang' . '-format' ); ?>
                
                </article>
                
                <?php wp_reset_postdata(); ?>
    
            <?php  endwhile; endif;?>
            
        </div>

        <?php if ( have_posts() ) : ?>
            <hr />
            <div class="row masonry">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
                    <article <?php post_class(); ?>>
        
                        <?php do_action('bazaarlite_postformat'); ?>
                    
                    </article>
            
                <?php endwhile; endif; ?> 

            </div>

        <?php endif; ?>
        
    <?php 
            
    } 
    
    add_action( 'bazaarlite_masonry', 'bazaarlite_masonry_child_function', 10, 2 );

}

?>