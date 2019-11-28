<div class="flex-text">
    <div class="text-inside      
    <?php
    $text_buttons = get_sub_field('text_button');
    if( $text_buttons ): 
        foreach( $text_buttons as $text_button ):
            echo $text_button;
            echo ' ';
        endforeach;
    endif; 
    ?>
    ">
        <?php the_sub_field('text'); ?>
    </div>
</div>