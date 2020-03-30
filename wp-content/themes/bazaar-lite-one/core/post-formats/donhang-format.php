<div class="donhang">

    <div class="donhang-content">

        <h6> <a href="<?php echo get_permalink(); ?>"> <?php echo the_title(); ?> </a> </h6>

        <p> <i class="fa fa-bolt">      </i> Số lượng:     <span> <?php echo get_post_field( 'soluong'    ); ?>       </span> </p>

        <p> <i class="fa fa-map-marker"></i> Nơi làm việc: <span> <?php echo get_post_field( 'noilamviec' ); ?>       </span> </p>

        <p> <i class="fa fa-usd">       </i> Lương:        <span> <?php echo get_post_field( 'luong'      ); ?> triệu </span> </p>

        <p> <i class="fa fa-calendar">  </i> Ngày tuyển:   <span> <?php echo get_post_field( 'ngaytuyen'  ); ?>       </span> </p>

    </div>

    <?php 
        $img_src = wp_get_attachment_image_src( get_post_thumbnail_id(), array(250, 170) )[0];

        $img_src = $img_src ? $img_src : get_stylesheet_directory_uri() . '/assets/images/img_default_250_170.png';
        
    ?>
    <img src="<?php echo $img_src; ?>" alt="" >

    <button class="btn btn-main-title-color btn-block <?php echo bazaarlite_setting( 'trangchu_settings_popup_panel' ) ?>"> <i class="fa fa-phone" aria-hidden="true"></i> ĐĂNG KÝ NGAY </button>
    
</div>