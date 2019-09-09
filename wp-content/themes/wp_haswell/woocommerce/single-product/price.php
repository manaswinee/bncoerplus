<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
	<?php if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) : ?>
		<div class="mt-0 mb-30 cms-product-price-wrap" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
	<?php else : ?>
		<div class="col-xs-6  mt-0 mb-30 pull-left cms-product-price-wrap" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
	<?php endif; ?>
		<p class="price"><?php echo $product->get_price_html(); ?></p>
		<meta itemprop="price" content="<?php echo $product->get_price(); ?>" />
		<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
		<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />
	</div>
</div><!-- row -->
<hr class="mt-0 mb-30">