<div id="content" class="container">
    <section class="content-orders">
        <div class="row contents-title">
            <div class="col-md-12">
                <h3> <?php echo bazaarlite_setting( 'trangchu_order_title_panel' ); ?> </h3>
            </div>
        </div>
        <div class="row contents-items">
            <?php 
                $args = array(
                    'post_type'   => 'qun_l_n_hng',
                    'meta_key'    => 'donhang_noibat',
                    'meta_value'  => true,
                    'numberposts' => bazaarlite_setting( 'trangchu_order_items_panel' ),
                );

                if (  get_posts( $args ) ) : foreach ( get_posts( $args ) as $post ) : 
            ?>
                <div class="col-md-3">
                    <div class="item">
                        <div class="item-content">
                            <h6> <a href="<?php echo get_permalink( $post->ID ); ?>"> <?php echo $post->post_title; ?> </a> </h6>
                            <p> <i class="fa fa-bolt"></i>       Số lượng:     <span> <?php echo get_post_field( 'soluong', $post ); ?>     </span> </p>
                            <p> <i class="fa fa-map-marker"></i> Nơi làm việc: <span> <?php echo get_post_field( 'noilamviec', $post ); ?>  </span> </p>
                            <p> <i class="fa fa-usd"></i>        Lương:        <span> <?php echo get_post_field( 'luong', $post ); ?> triệu </span> </p>
                            <p> <i class="fa fa-calendar"></i>   Ngày tuyển:   <span> <?php echo get_post_field( 'ngaytuyen', $post ); ?>   </span> </p>
                        </div>
                        <img src="<?php echo get_post_field( 'avatar', $post )['guid']; ?>" 
                            alt="<?php echo get_post_field( 'avatar', $post )['post_title']; ?>" >
                        <button class="btn btn-primary btn-block <?php echo bazaarlite_setting( 'trangchu_settings_popup_panel' ) ?>"> <i class="fa fa-phone" aria-hidden="true"></i> ĐĂNG KÝ NGAY </button>
                    </div>
                </div>

            <?php endforeach; else: ?>
                
                <div class="col-md-12"> <p> Dữ liệu trống </p> </div>

            <?php endif; ?>
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
                $table_args = array(
                    'post_type'   => 'qun_l_n_hng',
                    'numberposts' => bazaarlite_setting( 'trangchu_table_items_panel' ),
                );

                $table_posts =  get_posts( $table_args );

                if (  $table_posts ) :
            ?>
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> NGÀNH NGHỀ </th>
                                <th> SỐ LƯỢNG </th>
                                <th> NƠI LÀM VIỆC </th>
                                <th> LƯƠNG </th>
                                <th> NGÀY TUYỂN </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ( $table_posts as $post ) : ?>
                                <tr>
                                    <td class="text-left"> <a href="<?php echo get_permalink( $table_posts->ID ); ?>"> <?php echo $post->post_title; ?> </a> </th>
                                    <td> <?php echo get_post_field( 'soluong', $post ); ?>     </td>
                                    <td> <?php echo get_post_field( 'noilamviec', $post ); ?>  </td>
                                    <td> <?php echo get_post_field( 'luong', $post ); ?> triệu </td>
                                    <td> <?php echo get_post_field( 'ngaytuyen', $post ); ?>   </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>

            <?php else: ?>

                <div class="col-md-12"> <p> Dữ liệu trống </p> </div>

            <?php endif; ?>
        
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
                                <td class="border-bottom border-right"> <i class="fa fa-arrow-circle-o-up fa-spin"></i> </td>
                                <td class="border-bottom "> 
                                    <?php echo bazaarlite_setting( 'trangchu_quangcao_noidung1_panel' ); ?> 
                                    <a href="<?php echo bazaarlite_setting( 'trangchu_quangcao_linkdangkiungtuyen_panel' ); ?>"> <button class="btn btn-primary btn-block"> ĐĂNG KÝ ỨNG TUYỂN </button> </a>
                                </td> 
                            </tbody>
                            <tbody>
                                <td class="border-bottom border-right"> <i class="fa fa-arrow-circle-o-up fa-spin"></i> </td>
                                <td class="border-bottom"> 
                                    <?php echo bazaarlite_setting( 'trangchu_quangcao_noidung2_panel' ); ?> 
                                    <button class="btn btn-primary btn-block <?php echo bazaarlite_setting( 'trangchu_settings_popup_panel' ) ?>"> XEM QUY TRÌNH </button>
                                </td>
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

                    $img_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post ) )[0];

                    $img_src = $img_src ? $img_src : get_stylesheet_directory_uri() . '/assets/images/logo.png';
            ?>
                    <div class="col-md-3">
                        <div class="item">
                            <img src="<?php echo $img_src; ?>" alt="">
                            <div class="item-content">
                                <h6> <a href="<?php echo get_permalink( $post->ID ); ?>"> <?php echo $post->post_title; ?>  </a> </h6>
                                <span> <?php echo get_the_date( 'd-m-Y', $post ); ?> </span>
                                <p> <?php echo $post->post_content; ?> </p>
                            </div>
                        </div>
                    </div>

            <?php endforeach; else: ?>
            
                    <div class="col-md-12"> <p> Dữ liệu trống </p> </div>
                
            <?php endif; ?>
        </div>
    </section>
</div>