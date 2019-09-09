<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     9.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $smof_data;
?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class('cms-single-product-wrap'); ?>>

    <div class="container">
   		<div class="row">
            <div class="col-md-12 text-center col-sm-12 entry-summary">
                <?php
					/**
					 * woocommerce_before_single_product_title hook
					 *
					 * @hooked woocommerce_template_single_title
					 */
					do_action( 'woocommerce_single_product_title' );
				?>
            </div>
			<div class="col-md-5 text-center col-sm-12 mb-50">
				<?php
					/**
					 * woocommerce_before_single_product_summary hook
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action( 'woocommerce_before_single_product_summary' );
				?>
			</div>
			<div class="col-md-7 col-sm-12 col-md-offset-0 mb-50 cwr-course-main-desc pull-right">
				<div class="entry-summary cwr_short_description">
					<?php
						/**
						 * woocommerce_single_product_summary hook
						 *
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 */
						do_action( 'woocommerce_single_product_summary' );
					?>
				</div><!-- .summary -->
		    </div>
		</div>   
		<meta itemprop="url" content="<?php the_permalink(); ?>" />
	</div>

	<div class="coursesLearningObj">
		<?php
	    /**
	     * woocommerce_after_single_product_summary hook
	     *
	     * @hooked woocommerce_output_product_data_tabs - 10
	     * @hooked woocommerce_upsell_display - 15
	     * @hooked woocommerce_output_related_products - 20
	     */
	    do_action( 'woocommerce_after_single_product_summary' );
    ?>
	</div>
	<div class="vc_row wpb_row vc_row-fluid cshero_57e24f7792934 cwr_testimonials cms-row-full-width">
		<div class="no-container">
			<div class="row">
				<div class="wpb_column vc_custom_column_container vc_col-sm-12 pb-80 mt-40" style="overflow:hidden">
					<div class="row">
						<div class="col-md-12">
							<h2 class="blog-page-title mt-0 mb-40 text-center"><?php _e('What Faculty and Our Partners Are Saying', 'wp_haswell') ?></h2>
							<?php echo do_shortcode('[bned_testimonials]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr class="mt-0 mb-80">
	
	<div class="container pb-80">
		<div class="row">
			<div class="col-md-12">
            	<h2 class="blog-page-title mt-0 mb-40 text-center"><?php _e('RELATED COURSES', 'wp_haswell') ?></h2>
          	</div>
          	<?php do_action('cms_single_product_related'); ?>
		</div>
	</div>
    <hr class="mt-0">
</div><!-- #product-<?php the_ID(); ?> -->
<?php
	if ( !empty($smof_data['woo_show_shop_info']) ) {
		//do_action('cms_woo_show_shop_info'); 
	}
	
	if ( !empty($smof_data['woo_show_clients_info']) ) {
		//do_action('cms_woo_show_clients');
	}
	do_action( 'woocommerce_after_single_product' );
?>
