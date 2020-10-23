<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="item-products">
	<div class="images">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if (has_post_thumbnail()): ?>
				<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-thumbnail.jpg" alt="<?php the_title(); ?>">
				<?php endif ?>
			</a>
		<div class="list-icon">
			<a href="<?php the_permalink(); ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
			<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
		</div>
		<?php woocommerce_show_product_loop_sale_flash() ?>
	</div>
    <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <div>
    	<?php woocommerce_template_loop_price() ?>
    </div>
    <div class="raiting woocommerce">
    	<?php woocommerce_template_loop_rating(); ?>
    </div>
</div>