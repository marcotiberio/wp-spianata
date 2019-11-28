<div class="navigation"> 
    <div class="nav-main"> 
        <div class="nav-top">
            <?php wp_nav_menu( array( 'menu' => 'Header' ) ); ?>
        </div>

        <div class="nav-middle">     
            <?php 
            if( have_rows('small_menu', 'option') ):
                while( have_rows('small_menu', 'option') ): the_row(); 
                $small_menu = get_sub_field("small_menu_name");
                $menu_slug = get_sub_field("menu_slug");
                ?>
                    <div class="small-menu-item" data-name= "<?php echo $menu_slug ?>" >
                        <?php echo $small_menu; ?>
                    </div>  
            <?php 
            endwhile;
            endif; 
            ?>
        </div>

        <div class="nav-bottom">
            <a target="_blank" href="<?php the_field('instagram_link', 'option'); ?>">
                <?php the_field('instagram_text', 'option'); ?>
            </a>
        </div>
    </div>

    <div class="backhome">
        <a href="<?php echo esc_url( get_page_link(183) ); ?>">
            <img class="red" src="<?php echo get_template_directory_uri()?>/assets/svg/spianata-hover.svg" alt="">         
            <img class="white" src="<?php echo get_template_directory_uri()?>/assets/svg/spianata.svg" alt="">  
        </a>
    </div>
</div>