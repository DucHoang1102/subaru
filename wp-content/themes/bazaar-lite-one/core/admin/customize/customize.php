<?php

if ( ! function_exists( 'bazaarliteone_customize_panel_function' ) ) {

    function bazaarliteone_customize_panel_function() {

        $theme_panel = array (

            /* HOME PAGE CUSTOMIZER */
            array( 
                
                'title'       => esc_html__( 'Trang chủ','bazaarone-lite'),
                'description' => esc_html__( 'Trang chủ','bazaarone-lite'),
                'type'        => 'panel',
                'id'          => 'trangchu_panel',
                'priority'    => '11',
                
            ),
                /* Khung hiển thị đơn hàng */
                array( 

                    'title'    => esc_html__( 'Khung hiển thị đơn hàng','bazaarone-lite'),
                    'type'     => 'section',
                    'panel'    => 'trangchu_panel',
                    'priority' => '10',
                    'id'       => 'trangchu_order_panel',
                ),
                    array(
                        
                        'label'       => esc_html__( 'Tiêu đề:','bazaarone-lite'),
                        'description' => esc_html__( 'Tiêu đề này sẽ hiển thị ra ngoài trang chủ','bazaarone-lite'),
                        'id'          => 'trangchu_order_title_panel',
                        'type'        => 'text',
                        'section'     => 'trangchu_order_panel',
                        'std'         => 'ĐƠN HÀNG NỔI BẬT',
                    ),
                    array(
                        
                        'label'       => esc_html__( 'Số lượng:','bazaarone-lite'),
                        'description' => esc_html__( 'Số lượng sản phẩm cần hiển thị','bazaarone-lite'),
                        'id'          => 'trangchu_order_items_panel',
                        'type'        => 'text',
                        'section'     => 'trangchu_order_panel',
                        'std'         => '8',
                    ),

                /* Khung hiển thị bảng đơn hàng */
                array( 

                    'title'    => esc_html__( 'Bảng hiển thị đơn hàng','bazaarone-lite'),
                    'type'     => 'section',
                    'panel'    => 'trangchu_panel',
                    'priority' => '10',
                    'id'       => 'trangchu_table_panel',
                ),
                    array(
                        
                        'label'       => esc_html__( 'Tiêu đề:','bazaarone-lite'),
                        'description' => esc_html__( 'Tiêu đề này sẽ hiển thị ra ngoài trang chủ','bazaarone-lite'),
                        'id'          => 'trangchu_table_title_panel',
                        'type'        => 'text',
                        'section'     => 'trangchu_table_panel',
                        'std'         => 'DANH SÁCH ĐƠN HÀNG MỚI NHẤT',
                    ),
                    array(
                        
                        'label'       => esc_html__( 'Số lượng:','bazaarone-lite'),
                        'description' => esc_html__( 'Số cột của bảng','bazaarone-lite'),
                        'id'          => 'trangchu_table_items_panel',
                        'type'        => 'text',
                        'section'     => 'trangchu_table_panel',
                        'std'         => '10',
                    ),

                /* Youtube giới thiệu công ty */
                array( 

                    'title'    => esc_html__( 'Youtube giới thiệu công ty','bazaarone-lite'),
                    'type'     => 'section',
                    'panel'    => 'trangchu_panel',
                    'priority' => '10',
                    'id'       => 'trangchu_youtube_panel',
                ),
                    array(
                        
                        'label'       => esc_html__( 'Link youtube:','bazaarone-lite'),
                        'description' => esc_html__( 'Vd: https://www.youtube.com/embed/OeHL','bazaarone-lite'),
                        'id'          => 'trangchu_youtube_link_panel',
                        'type'        => 'text',
                        'section'     => 'trangchu_youtube_panel',
                        'std'         => 'https://www.youtube.com/embed/OeHLHNKQCXA',
                    ),

                /* Khung hiển thị tin tức */
                array( 

                    'title'    => esc_html__( 'Khung hiển thị tin tức','bazaarone-lite'),
                    'type'     => 'section',
                    'panel'    => 'trangchu_panel',
                    'priority' => '10',
                    'id'       => 'trangchu_news_panel',
                ),
                    array(
                        
                        'label'       => esc_html__( 'Tiêu đề:','bazaarone-lite'),
                        'description' => esc_html__( 'Tiêu đề này sẽ hiển thị ra ngoài trang chủ','bazaarone-lite'),
                        'id'          => 'trangchu_news_title_panel',
                        'type'        => 'text',
                        'section'     => 'trangchu_news_panel',
                        'std'         => 'TIN TỨC MỚI NHẤT',
                    ),
                    array(
                        
                        'label'       => esc_html__( 'Slug danh mục tin tức:','bazaarone-lite'),
                        'description' => esc_html__( 'Vd: tin-tuc','bazaarone-lite'),
                        'id'          => 'trangchu_news_slug_panel',
                        'type'        => 'text',
                        'section'     => 'trangchu_news_panel',
                        'std'         => 'tin-tuc',
                    ),
                    array(
                        
                        'label'       => esc_html__( 'Số lượng:','bazaarone-lite'),
                        'description' => esc_html__( 'Số lượng tin cần hiển thị','bazaarone-lite'),
                        'id'          => 'trangchu_news_items_panel',
                        'type'        => 'text',
                        'section'     => 'trangchu_news_panel',
                        'std'         => '4',
                    ),

                /* Cài đặt khác */
                array( 

                    'title'    => esc_html__( 'Cài đặt khác','bazaarone-lite'),
                    'type'     => 'section',
                    'panel'    => 'trangchu_panel',
                    'priority' => '10',
                    'id'       => 'trangchu_settings_panel',
                ),
                    array(
                        
                        'label'       => esc_html__( 'Class name của popup form liên hệ:','bazaarone-lite'),
                        'description' => esc_html__( 'Lấy class tại plugin Popup Market','bazaarone-lite'),
                        'id'          => 'trangchu_settings_popup_panel',
                        'type'        => 'text',
                        'section'     => 'trangchu_settings_panel',
                        'std'         => 'popmake-1111',
                    ),
                    array(
                        
                        'label'       => esc_html__( 'Shortcode form đăng ký:','bazaarone-lite'),
                        'description' => esc_html__( 'Lấy Shortcode tại plugin Wpforms','bazaarone-lite'),
                        'id'          => 'trangchu_settings_form_panel',
                        'type'        => 'text',
                        'section'     => 'trangchu_settings_panel',
                        'std'         => '[wpforms id="2099"]',
                    ),

                // /* Khung hiển thị footer */
                // array( 

                //     'title'    => esc_html__( 'Khung hiển thị footer','bazaarone-lite'),
                //     'type'     => 'section',
                //     'panel'    => 'trangchu_panel',
                //     'priority' => '10',
                //     'id'       => 'trangchu_footer_panel',
                // ),
                //     array( 

                //         'title'    => esc_html__( 'Khung hiển thị footer','bazaarone-lite'),
                //         'type'     => 'section',
                //         'panel'    => 'trangchu_footer_panel',
                //         'priority' => '10',
                //         'id'       => 'trangchu_footer_colum1_panel',
                //     ),
                //         array(
                        
                //             'label'       => esc_html__( 'Tiêu đề:','bazaarone-lite'),
                //             'description' => esc_html__( 'Tiêu đề này sẽ hiển thị ra ngoài trang chủ','bazaarone-lite'),
                //             'id'          => 'trangchu_footer_colum1_title_panel',
                //             'type'        => 'text',
                //             'section'     => 'trangchu_footer_colum1_panel',
                //             'std'         => 'Tiêu đề',
                //         ),

        );

        new bazaarlite_customize( $theme_panel );

    }

    add_action('bazaarliteone_customize_panel', 'bazaarliteone_customize_panel_function', 10, 2 );
}

do_action('bazaarliteone_customize_panel');

?>