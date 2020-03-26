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

        <?php  if( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
        
            <tr>

                <td class="text-left"> <a href="<?php echo get_permalink(); ?>"> <?php echo the_title() ?> </a> </th>

                <td> <?php echo get_post_field( 'soluong'    ); ?>       </td>

                <td> <?php echo get_post_field( 'noilamviec' ); ?>       </td>

                <td> <?php echo get_post_field( 'luong'      ); ?> triệu </td>

                <td> <?php echo get_post_field( 'ngaytuyen'  ); ?>       </td>
            </tr>
        
        <?php endwhile; endif; ?>

    </tbody>

</table