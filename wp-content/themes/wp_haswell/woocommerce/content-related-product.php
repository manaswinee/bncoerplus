<div class="cms-product text-center">
	<div class="cms-woo-image">
		<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
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
	<div class="cms-product-title">
		<h3 class="mb-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
	<?php
		/**
		 * woocommerce_after_shop_loop_item_title hook
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_price - 10
		 */

		do_action( 'woocommerce_after_shop_loop_item_title' );
	?>
	<div class="related_prod_preview"><a href="<?php the_permalink(); ?>" class="vc_general vc_btn3">Preview</a></div>
</div>