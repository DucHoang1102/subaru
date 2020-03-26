<div class="donhang">

    <div class="donhang-content">
        <h6> <a href="<?php echo get_permalink( $post->ID ); ?>"> <?php echo the_title(); ?> </a> </h6>
        <p> <i class="fa fa-bolt"></i>       Số lượng:     <span> <?php echo get_post_field( 'soluong'    ); ?>       </span> </p>
        <p> <i class="fa fa-map-marker"></i> Nơi làm việc: <span> <?php echo get_post_field( 'noilamviec' ); ?>       </span> </p>
        <p> <i class="fa fa-usd"></i>        Lương:        <span> <?php echo get_post_field( 'luong'      ); ?> triệu </span> </p>
        <p> <i class="fa fa-calendar"></i>   Ngày tuyển:   <span> <?php echo get_post_field( 'ngaytuyen'  ); ?>       </span> </p>
    </div>

    <img src="<?php echo get_post_field( 'avatar', $post )['guid']; ?>" alt="<?php echo get_post_field( 'avatar' )['post_title']; ?>" >

    <button class="btn btn-primary btn-block <?php echo bazaarlite_setting( 'trangchu_settings_popup_panel' ) ?>"> <i class="fa fa-phone" aria-hidden="true"></i> ĐĂNG KÝ NGAY </button>
    
</div>