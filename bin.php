<?php
    $loop = 10;
    ?>

    <a href="<?php echo esc_url( get_page_link(52) ); ?>">
        <div class="image-box flow-left" data-loop="<?php echo $loop ?>">
            <div class="image-box-inside red">
                <?php 
                for ($i = 1; $i <= $loop; $i++) {
                ?>
                    <img src="<?php echo get_template_directory_uri()?>/assets/svg/spianata-hover.svg" alt="">         
                <?php   
                }
                ?>
            </div>
            <div class="image-box-inside white">
                <?php 
                for ($i = 1; $i <= $loop; $i++) {
                ?>
                    <img src="<?php echo get_template_directory_uri()?>/assets/svg/spianata.svg" alt="">         
                <?php   
                }
                ?>
            </div>
        </div>
    </a>























    <a href="<?php echo esc_url( get_page_link(52) ); ?>">
        <div class="home-image delivery">
            <img class="red" src="<?php echo get_template_directory_uri()?>/assets/svg/catering-hover.svg" alt=""> 
            <img class="white" src="<?php echo get_template_directory_uri()?>/assets/svg/catering.svg" alt=""> 
        </div>
    </a>

    <a href="<?php echo esc_url( get_page_link(8) ); ?>">
        <div class="home-image bread-making">
            <img class="red" src="<?php echo get_template_directory_uri()?>/assets/svg/classes-hover.svg" alt=""> 
            <img class="white" src="<?php echo get_template_directory_uri()?>/assets/svg/classes.svg" alt=""> 
        </div>
    </a>

    <a href="<?php the_field('instagram_link', 'option'); ?>">
        <div class="home-image instagram">
            <img class="red" src="<?php echo get_template_directory_uri()?>/assets/svg/instagram-hover.svg" alt=""> 
            <img class="white" src="<?php echo get_template_directory_uri()?>/assets/svg/instagram.svg" alt=""> 
        </div>
    </a>

    <a href="<?php the_field('twitter_link', 'option'); ?>">
        <div class="home-image twitter">
            <img class="red" src="<?php echo get_template_directory_uri()?>/assets/svg/twitter-hover.svg" alt=""> 
            <img class="white" src="<?php echo get_template_directory_uri()?>/assets/svg/twitter.svg" alt=""> 
        </div>
    </a>