<div class="post">
    
    <?php

        $img_src = wp_get_attachment_image_src( get_post_thumbnail_id(), array(250, 170) )[0];

        $img_src = $img_src ? $img_src : get_stylesheet_directory_uri() . '/assets/images/img_default_250_170.png';

    ?>

    <img src="<?php echo $img_src; ?>" alt="tin tuc lao dong nhat ban">

    <div class="post-content">

        <h6> <a href="<?php echo get_permalink(); ?>"> <?php echo the_title(); ?>  </a> </h6>

        <span> <?php echo get_the_date( 'd-m-Y' ); ?> </span>

        <p> <?php echo wp_trim_words ( get_the_content(), 30 ); ?> </p>

    </div>

</div>