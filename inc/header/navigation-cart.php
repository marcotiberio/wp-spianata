<div class="nav-cart">
    <div class="cart">
        <a href="<?php echo esc_url( get_page_link(53) ); ?>">
            Cart
            <?php
            $cartcount = WC()->cart->get_cart_contents_count();
            if ($cartcount > 0) { echo "(".$cartcount.")"; }
            ?>
        </a>
    </div>
    <a href="<?php echo esc_url( get_page_link(55) ); ?>">
        
    <div class="in">
        My Account
    </div>
    <div class="out">
        Login
    </div>
    
    </a>
</div>