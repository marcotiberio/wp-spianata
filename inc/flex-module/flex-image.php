<div class="flex-image">
    <?php 
    $image = get_sub_field('picture');
    $size = 'big';
    if( $image ) {
        echo wp_get_attachment_image( $image, $size );
    }
    ?>
</div>