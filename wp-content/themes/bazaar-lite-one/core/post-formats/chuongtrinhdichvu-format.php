<?php 
    $datas = array( 
        array(
            'title'   => 'Thực tập sinh kỹ năng',
            'icon'    => 'fa fa-cog fa-spin',
            'content' => 'Tiếp tục kế hoạch tuyển dụng lao động vô cùng lớn trong năm 2015 từ phía Nhật Bản, Công ty SUBARU thông báo các đơn hàng đang tiếp tục nhận hồ sơ',
            'link'    => bazaarlite_setting('trangchu_chuongtrinhdichvu_link1_panel'),
        ),
        array(
            'title'   => 'Chương trình kỹ sư',
            'icon'    => 'fa fa-users fa-spin',
            'content' => 'Nhật Bản là nước thu hút nguồn nhân lực và nhân tài trên khắp thế giới. Song song với nhu cầu cấp thiết về lao động Thực tập tay nghề, Nhật Bản còn thu hút',
            'link'    => bazaarlite_setting('trangchu_chuongtrinhdichvu_link2_panel'),
        ),
        array(
            'title'   => 'Giới thiệu việc làm',
            'icon'    => 'fa fa-plane fa-spin',
            'content' => 'Với mục đích hỗ trợ việc làm cho các Tu nghiệp sinh, Thực tập sinh sau khi làm việc ở nước ngoài trở về nước, trung tâm hỗ trợ việc làm SUBARU',
            'link'    => bazaarlite_setting('trangchu_chuongtrinhdichvu_link3_panel'),
        ),
        array(
            'title'   => 'Du học Nhật Bản',
            'icon'    => 'fa fa-graduation-cap fa-spin',
            'content' => 'Để lựa chọn một công ty tin cậy đưa du học sinh ra nước ngoài học tập là một băn khoăn, trăn trở rất lớn của phụ huynh học sinh cũng như bản thân',
            'link'    => bazaarlite_setting('trangchu_chuongtrinhdichvu_link4_panel'),
        )
    );

?>

<section class="content-chuongtrinhdichvu">

    <div class="row contents-title">

        <div class="col-md-12">

            <h3> CHƯƠNG TRÌNH VÀ DỊCH VỤ </h3>

        </div>

    </div>

    <div class="row content-item">
        
        <?php foreach ( $datas as $data ) : ?>

            <div class="col-md-3 donhangdichvu">

                <div class="row">
                    <div class="col-md-12">
                        <table>
                            <tbody>
                                <td class="icon"> <i class="<?php echo $data['icon']; ?>" aria-hidden="true"></i> </td>
                                <td class="title"> <h4> <?php echo $data['title']; ?> </h4> </td>
                            </tbody>
                        </table>
                    </div>
            

                    <div class="col-md-12 content">

                        <?php echo $data['content']; ?>

                    </div>

                    <div class="col-md-12 readmore">
                            
                        <a href="<?php echo home_url( $data['link'] ); ?>">Xem thêm</a>

                    </div>
                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>