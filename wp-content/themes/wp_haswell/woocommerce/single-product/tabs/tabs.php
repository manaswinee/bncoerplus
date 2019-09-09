<?php
/**
 * Single Product tabs
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="woocommerce-tabs tabs-3">
		
		<div class="tab-content">
			<?php $j = 0; foreach ( $tabs as $key => $tab ) : ?>
				<div id="tab-<?php echo esc_attr( $key ); ?>" class="tab-pane fade <?php echo ($j == 0) ? 'active in' : '' ?>">
					<?php call_user_func( $tab['callback'], $key, $tab ); ?>
				</div>
			<?php $j++; endforeach; ?>	
		</div>
	</div>

<?php endif; ?>
