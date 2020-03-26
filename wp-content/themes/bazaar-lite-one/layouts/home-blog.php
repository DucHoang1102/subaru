<div id="content" class="container">

    <section class="content-orders">

        <div class="row contents-title">
            <div class="col-md-12">
                <h3> <?php echo bazaarlite_setting( 'trangchu_order_title_panel' ); ?> </h3>
            </div>
        </div>

        <div class="row contents-items">
            <?php 

                $noibat_args = array(
                    'post_type'      => 'qun_l_n_hng',
                    'category_name'  => bazaarlite_setting( 'trangchu_order_uri_panel' ),
                    'posts_per_page' => bazaarlite_setting( 'trangchu_order_items_panel' ),
                );

                $noibat_query = new WP_Query( $noibat_args );
            ?>

            <?php if( $noibat_query ->have_posts() ) : while ( $noibat_query ->have_posts() ) : $noibat_query->the_post(); ?>

                <article class="col-md-3">
                    <?php  get_template_part( 'core/post-formats/' . 'donhang' . '-format' ); ?>
                </article>

            <?php endwhile; endif; ?>
        </div>
    </section>

    <section class="content-table">
        <div class="row contents-title">
            <div class="col-md-12">
                <h3> <?php echo bazaarlite_setting( 'trangchu_table_title_panel' ); ?> </h3>
            </div>
        </div>
        <div class="row contents-items">
            <?php

                $all_donhang_args = array(
                    'post_type'      => 'qun_l_n_hng',
                    'category_name'  => bazaarlite_setting( 'trangchu_table_uri_panel' ),
                    'posts_per_page' => bazaarlite_setting( 'trangchu_table_items_panel' ),
                );

                $all_donhang_query = new WP_Query( $all_donhang_args );

                set_query_var( 'q' , $all_donhang_query );
            ?>

            <article class="col-md-12 table-responsive">

                <?php get_template_part( 'core/post-formats/' . 'tabledonhang' . '-format' ); ?>
                
            </article>
        
        </div>
        
    </section>

    <section class="content-video">
        <div class="row">
            <div class="col-md-6">
                <div class="row contents-title">
                    <div class="col-md-12">
                        <h3> <?php echo bazaarlite_setting( 'trangchu_quangcao_title_panel' ); ?> </h3>
                    </div>
                </div>
                <div class="row content-items">
                    <div class="col-md-12">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border-bottom border-right"> <i class="fa fa-arrow-circle-o-up fa-spin"></i> </td>
                                    <td class="border-bottom "> 
                                        <p> <?php echo bazaarlite_setting( 'trangchu_quangcao_noidung1_panel' ); ?>  </p>
                                        <div class="text-center"> 
                                            <button class="btn btn-primary <?php echo bazaarlite_setting( 'trangchu_settings_popup_panel' ) ?>"> ĐĂNG KÝ ỨNG TUYỂN </button> </a> 
                                        </div>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="border-bottom border-right"> <i class="fa fa-arrow-circle-o-up fa-spin"></i> </td>
                                    <td class="border-bottom">
                                        <p> <?php echo bazaarlite_setting( 'trangchu_quangcao_noidung2_panel' ); ?> </p>
                                        <div class="text-center"> 
                                            <a href="<?php echo bazaarlite_setting( 'trangchu_quangcao_linkdangkiungtuyen_panel' ); ?>"> <button class="btn btn-primary"> XEM QUY TRÌNH </button> </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="row contents-title">
                    <div class="col-md-12">
                        <h3> <?php echo bazaarlite_setting( 'trangchu_youtube_title_panel' ); ?> </h3>
                    </div>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?php echo bazaarlite_setting( 'trangchu_youtube_link_panel' ); ?>" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="content-news">
        <div class="row contents-title">
            <div class="col-md-12">
                <h3> <?php echo bazaarlite_setting( 'trangchu_news_title_panel' ); ?> </h3>
            </div>
        </div>

        <div class="row contents-items">
            <?php 
                $news_args = array(
                    'category'    => get_category_by_slug( bazaarlite_setting( 'trangchu_news_slug_panel' ) )->term_id,
                    'numberposts' => bazaarlite_setting( 'trangchu_news_items_panel' ),
                );

                $new_posts = get_posts( $news_args );

                if ( $new_posts ) : foreach ( $new_posts as $post ) :

                    $img_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post ), array(500, 350) )[0];

                    $img_src = $img_src ? $img_src : get_stylesheet_directory_uri() . '/assets/images/img_default_500_350.png';
            ?>
                    <div class="col-md-3">
                        <div class="item">
                            <img src="<?php echo $img_src; ?>" alt="">
                            <div class="item-content">
                                <h6> <a href="<?php echo get_permalink( $post->ID ); ?>"> <?php echo $post->post_title; ?>  </a> </h6>
                                <span> <?php echo get_the_date( 'd-m-Y', $post ); ?> </span>
                                <p> <?php echo wp_trim_words ( $post->post_content, 30 ); ?> </p>
                            </div>
                        </div>
                    </div>

            <?php endforeach; else: ?>
            
                    <div class="col-md-12"> <p> Dữ liệu trống </p> </div>
                
            <?php endif; ?>
        </div>
    </section>
</div>