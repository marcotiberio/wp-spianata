<?php
/* Template Name: homepage */ 
get_header(); 

$loop = 30;
?>


<div class="inside-normal homepage">

    <div class="desktop">

        <a href="<?php echo esc_url( get_page_link(6) ); ?>"  class="title">
            <div class="title-inside">
                <div id="spianata-title">
                    SPIANATA BAKERY
                </div>
            </div>
        </a>

        <a href="<?php echo esc_url( get_page_link(52) ); ?>" class="title">
            <div class="title-inside">
                <div id="catering-title">
                    CATERING
                </div>
            </div>
        </a>

        <a href="<?php echo esc_url( get_page_link(8) ); ?>" class="title">
            <div class="title-inside">
                <div id="classes-title">
                    BAKERY CLASSES
                </div>
            </div>
        </a>

        <a href="https://www.instagram.com/spianatabakery/" target="_blank" class="title">
            <div class="title-inside">
                <div id="instagram-title">
                    INSTAGRAM
                </div>
            </div>
        </a>

    </div>

        <?php 
        $image = get_field('spianata_image');
        if( !empty($image) ): ?>
            <div class="homepage-image" id="spianata-image" style="background-image:url('<?php echo $image['url']; ?>');">
        <?php endif; ?>



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