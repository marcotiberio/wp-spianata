<?php
/* Template Name: homepage */ 
get_header(); 

$loop = 30;
?>


<div class="inside-normal homepage">

    <div class="desktop">

        <a href="<?php echo esc_url( get_page_link(6) ); ?>" class="title move-left">
            <div class="title-inside marquee">
                <div class="inner">
                    <?php for ($i = 1; $i <= $loop; $i++) { ?>
                        SPIANATA
                    <?php } ?>
                </div>
            </div>
        </a>

        <a href="<?php echo esc_url( get_page_link(52) ); ?>" class="title move-right">
            <div class="title-inside marquee">
                <div class="inner">
                    <?php for ($i = 1; $i <= $loop; $i++) { ?>
                        DELIVERY
                    <?php } ?>
                </div>
            </div>
        </a>

        <a href="<?php echo esc_url( get_page_link(8) ); ?>" class="title move-left">
            <div class="title-inside marquee">
                <div class="inner">
                    <?php for ($i = 1; $i <= $loop; $i++) { ?>
                        BREAD MAKING
                    <?php } ?>
                </div>
            </div>
        </a>

        <a href="https://www.instagram.com/spianatabakery/" target="_blank" class="title move-right">
            <div class="title-inside marquee">
                <div class="inner">
                    <?php for ($i = 1; $i <= $loop; $i++) { ?>
                        INSTAGRAM
                    <?php } ?>
                </div>
            </div>
        </a>

        <a href="https://twitter.com/spianatabakery" target="_blank" class="title move-left">
            <div class="title-inside marquee">
                <div class="inner">
                    <?php for ($i = 1; $i <= $loop; $i++) { ?>
                        TWITTER
                    <?php } ?>
                </div>
            </div>
        </a>
    </div>



    <div class="mobile">
        <a href="<?php echo esc_url( get_page_link(6) ); ?>" class="title-mobile">
            <img src="<?php echo get_template_directory_uri()?>/assets/svg/spianata.svg" alt="">         
        </a>

        <a href="<?php echo esc_url( get_page_link(52) ); ?>" class="title-mobile">
            <img src="<?php echo get_template_directory_uri()?>/assets/svg/catering.svg" alt="">     
        </a>

        <a href="<?php echo esc_url( get_page_link(8) ); ?>" class="title-mobile">
            <img src="<?php echo get_template_directory_uri()?>/assets/svg/classes.svg" alt="">           
        </a>

        <a href="https://www.instagram.com/spianatabakery/" target="_blank" class="title move-right">
            <img src="<?php echo get_template_directory_uri()?>/assets/svg/instagram.svg" alt="">               
        </a>

        <a href="https://twitter.com/spianatabakery" target="_blank" class="title move-right">
            <img src="<?php echo get_template_directory_uri()?>/assets/svg/twitter.svg" alt="">               
        </a>
    </div>

</div>

<div class="homepage-footer">
    <div class="nav-home-footer">
        <?php wp_nav_menu( array('menu' => 'Footer') ); ?>
    </div>

    <div class="spianata-limited">
        Spianata & Co llc
    </div>
</div>