<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
?>

<div  class="time">
<?php 
$today = date("d/m/Y"); 
echo $today;  
?> 
</div>


<div class="post-code">

	Enter your postcode to see if we deliver to your area 

	<div class="post-code-function">
		<form action="post-code-number">
			<input class="postcode" type="text" name="postcodenumber" placeholder="Enter your postcode here" style="width: 250px;" />
			<input class="check" type="submit" value="Check →" />
		</form>
	</div>

	<?php
	$incorrect = get_field('incorrect_postcode', 'option');
	if( $incorrect ) { 
	?>

	<div class="message">
		<?php echo $incorrect; ?> 
	</div>

	<?php 
	}; 
	?>
	
</div>




<div class="all-categories">

	<div class="option-top">
		<?php
		if( have_rows('flexible_content', 'option') ):
			while ( have_rows('flexible_content', 'option') ) : the_row();
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



	<?php
	$args = array('taxonomy' => 'product_cat');
	$cats = get_categories($args);
	foreach($cats as $cat) {
	?>

		<div class="woo-category" id="<?php echo $cat->slug; ?>">

			<div class="category-title">
				<?php echo $cat->name; ?>
			</div>

			<div class="category-description">
				<?php echo $cat->description; ?>
			</div>
			
			<div class="category-products">
				<?php
				$args = array (
					'post_type'              => array( 'product' ),
					'post_status'            => array( 'publish' ),
					'nopaging'               => true,
					'order'                  => 'ASC',
					'orderby'                => 'menu_order',
				);

				$services = new WP_Query( $args );

				if ( $services->have_posts() ) {
					while( $services->have_posts() ) : $services->the_post(); 
						if ( has_term($cat, 'product_cat') ) {
						?>

							<div class="woo-product">
								<?php the_title( '<div class="product-title">', '</div>' ); ?>

								<div class="woo-product-description">
									<?php the_field('product_description'); ?>
								</div>

								<div class="add-to-cart">
									<?php wc_get_template_part( 'content', 'product' ); ?>
								</div>	
								 	
							</div>
								
						<?php
						}
					endwhile; 
				} else {
					echo "NO POST";	
				}

				wp_reset_postdata();
				?>
			</div>

		</div>
	<?php
	}
	?>

<div class="shop-footer">
	<?php
	if( have_rows('flexible_content', 52) ):
		while ( have_rows('flexible_content', 52) ) : the_row();
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

<?php 
get_footer(); 
?>
</div>

