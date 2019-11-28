<div class="flexible-content">
    <?php
    if( have_rows('flexible_content') ):
        while ( have_rows('flexible_content') ) : the_row();
            if( get_row_layout() == 'layout_image' ):       
                get_template_part( 'inc/flex-module/flex-image'); 
            elseif( get_row_layout() == 'layout_video' ): 
                get_template_part( 'inc/flex-module/flex-video');                
            elseif( get_row_layout() == 'layout_text' ): 
                get_template_part( 'inc/flex-module/flex-text');
            endif;
        endwhile;
    else :
    endif;
    ?>
</div>