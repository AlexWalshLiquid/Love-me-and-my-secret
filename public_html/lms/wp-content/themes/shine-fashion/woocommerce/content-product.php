<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $product, $woocommerce_loop;
// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;
// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;
// Increase loop count
$woocommerce_loop['loop']++;
// Extra post classes
$classes = array();
// Products List	
if ( is_product_category() )
$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
//Related Products
if ( is_product() )
$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
//Cross Sells
if ( is_cart() || is_checkout())
$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
$classes[] = "columns-".$woocommerce_loop['columns'];
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>
<li <?php post_class( $classes ); ?> >
		<div class="container-inner">
		<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
		<div class="image-block">		
		<a href="<?php the_permalink(); ?>">
			<?php
				/**
				 * woocommerce_before_shop_loop_item_title hook
				 *
				 * @hooked woocommerce_show_product_loop_sale_flash - 10
				 * @hooked woocommerce_template_loop_product_thumbnail - 10
				 */
				do_action( 'woocommerce_before_shop_loop_item_title' );
			?>
		</a>
		</div>
			<div class="rating-block"></div>
			<div class="title-name"><h3 class="product-name"><?php the_title(); ?></h3></div>	
			<?php
				/**
				 * woocommerce_after_shop_loop_item_title hook
				 *
				 * @hooked woocommerce_template_loop_price - 5 
				 * @hooked woocommerce_template_loop_rating - 10
				 */
				 do_action( 'woocommerce_after_shop_loop_item_title' );
			?>
			
		
		<div class="product-block-hover">	
			<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
		</div>
		</div>
</li>