<div class="nav-mobile">  
    <button class="hamburger hamburger--squeeze" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>   

    <div class="mobile-slide">
        <?php wp_nav_menu( array( 'menu' => 'Mobile' ) ); ?>
        <li class="cart">
            <a href="<?php echo esc_url( get_page_link(53) ); ?>">
                Cart
                <?php
                $cartcount = WC()->cart->get_cart_contents_count();
                if ($cartcount > 0) { echo $cartcount; }
                ?>
            </a>
        </li>
    </div>
</div>