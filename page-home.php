<?php
/* Template Name: homepage */ 
get_header(); 

$loop = 30;
?>

<?php
$symbol = get_field('spianata_symbol');
$imagespianata = get_field('spianata_image');
$imagecatering = get_field('catering_image');
$imageclasses = get_field('classes_image');
$imageinstagram = get_field('instagram_image');
$imagemobile = get_field('mobile_image');
?>


<div class="inside-normal homepage">

    <div class="desktop">

        <div class="desktop-title">

            <div class="title">
                <div class="title-inside">
                    <div id="spianata-symbol">
                        <img src="<?php echo $symbol[url]; ?>" alt="<?php echo $symbol[alt]; ?>">
                    </div>
                </div>
            </div>

            <a href="<?php echo esc_url( get_page_link(6) ); ?>" class="title">
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



        <div class="homepage-image" id="spianata-image" style="background-image:url('<?php echo $imagespianata['url']; ?>'); background-repeat: no-repeat; background-size: cover;">
        </div>
        <div class="homepage-image" id="catering-image" style="background-image:url('<?php echo $imagecatering['url']; ?>'); background-repeat: no-repeat; background-size: cover;">
        </div>
        <div class="homepage-image" id="classes-image">
        <?php
// Get the Video Fields
$video_mp4 =  get_field('classes_image'); // MP4 Field Name
                <br>
// Build the  Shortcode
$attr =  array(
'mp4'      => $video_mp4,
'webm'     => $video_webm,
'flv'      => $video_flv,
'poster'   => $video_poster,
'preload'  => 'auto'
);

// Display the Shortcode
echo wp_video_shortcode(  $attr );
?>
        </div>
        <div class="homepage-image" id="instagram-image" style="background-image:url('<?php echo $imageinstagram['url']; ?>'); background-repeat: no-repeat; background-size: cover;">
        </div>

    </div>



    <div class="mobile">
        
        <div class="title">
            
            <div class="title-inside">
                <div id="spianata-symbol-mobile">
                    <img src="<?php echo $symbol[url]; ?>" alt="<?php echo $symbol[alt]; ?>">
                </div>
            </div>
        

            <a href="<?php echo esc_url( get_page_link(6) ); ?>" class="title">
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

        <div class="homepage-image-mobile" id="mobile-image"
            style="background-image:url('<?php echo $imagemobile['url']; ?>'); background-repeat: no-repeat; background-size: cover;">
        </div>

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