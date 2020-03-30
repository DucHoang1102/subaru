<?php 

/**
 * Custom for child theme
 * 
 */

if (!function_exists('bazaarlite_masonry_child_function')) {

    remove_action( 'bazaarlite_masonry', 'bazaarlite_masonry_function' );

    function bazaarlite_masonry_child_function() { ?>

        <div class="contents-title">
            <h3 > <?php echo mb_strtoupper( single_cat_title('',false) ) ?> </h3>
        </div>
        
        <?php

            $args = array(
                'post_type' => array( 'qun_l_n_hng', 'post' ),
                'cat'       => get_queried_object()->term_id,
            );

            $q = new WP_Query( $args );

        ?>

        <?php if ($q->have_posts()) : ?>

            <div class="row masonry">
                
                <?php if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
                    
                    <article class="col-md-3">

                        <?php if ( get_post_type() == 'qun_l_n_hng' ) : ?>

                            <?php  get_template_part( 'core/post-formats/' . 'donhang' . '-format' ); ?>

                        <?php else : ?>

                            <?php get_template_part( 'core/post-formats/' . 'news' . '-format' ); ?>

                        <?php endif; ?>
                    
                    </article>
                    
                    <?php wp_reset_postdata(); ?>
        
                <?php  endwhile; endif;?>
                
            </div>
        
        <?php endif; ?>

    <?php 
            
    } 
    
    add_action( 'bazaarlite_masonry', 'bazaarlite_masonry_child_function', 10, 2 );

}

?>