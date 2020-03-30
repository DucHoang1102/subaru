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

            <?php if( $noibat_query->have_posts() ) : while ( $noibat_query->have_posts() ) : $noibat_query->the_post(); ?>

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
                                            <button class="btn btn-main-title-color <?php echo bazaarlite_setting( 'trangchu_settings_popup_panel' ) ?>"> ĐĂNG KÝ ỨNG TUYỂN </button> </a> 
                                        </div>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="border-bottom border-right"> <i class="fa fa-arrow-circle-o-up fa-spin"></i> </td>
                                    <td class="border-bottom">
                                        <p> <?php echo bazaarlite_setting( 'trangchu_quangcao_noidung2_panel' ); ?> </p>
                                        <div class="text-center"> 
                                            <a href="<?php echo bazaarlite_setting( 'trangchu_quangcao_linkdangkiungtuyen_panel' ); ?>"> <button class="btn btn-main-title-color"> XEM QUY TRÌNH </button> </a>
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
                    'post_type'      => 'post',
                    'category_name'  => bazaarlite_setting( 'trangchu_news_slug_panel' ),
                    'posts_per_page' => bazaarlite_setting( 'trangchu_news_items_panel' ),
                );

                $news_query = new WP_Query( $news_args );

            ?>
            
            <?php if( $news_query->have_posts() ) : while ( $news_query->have_posts() ) : $news_query->the_post(); ?>

                <article class="col-md-3">

                    <?php  get_template_part( 'core/post-formats/' . 'news' . '-format' ); ?>

                </article>

            <?php endwhile; endif; ?>
                
        </div>
    </section>
</div>