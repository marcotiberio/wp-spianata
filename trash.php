<a href="<?php echo esc_url( get_page_link(52) ); ?>">
        <div class="home-image bread-making">
            <div class="cycle-slideshow cycle-autoinit" 
                data-cycle-fx="<?php echo $data_cycle_fx ?>"
                data-cycle-speed="<?php echo $data_cycle_speed ?>"
                data-cycle-timeout="<?php echo $data_cycle_timeout ?>"
                data-cycle-easing="<?php echo $data_cycle_easing ?>"
                >
                <?php for ($i = 1; $i <= $loop; $i++) { ?>
                    <img src="<?php echo get_template_directory_uri()?>/assets/svg/3-classes.svg" alt=""> 
                <?php } ?>
            </div>
        </div>
    </a>