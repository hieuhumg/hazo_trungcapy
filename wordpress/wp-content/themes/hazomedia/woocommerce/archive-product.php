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

?>

<main>
	<section class="page-banner" style="background-image:url(<?php the_field('b1_banner','option') ?>);">
		<div class="container text-center">
			<h2 class="title"><?php woocommerce_page_title(); ?></h2>
		</div>
	</section>
	<?php get_template_part( 'template-parts/breadcrumb', '' ); ?>
	<section class="site-products-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="select-mobile">
						<a href="javascript:void(0)">Bộ lọc <i class="fa fa-angle-down" aria-hidden="true"></i></a>
					</div>
					<div class="sidebar-products">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				</div>
				<div class="col-lg-9 col-md-8">
					<div class="list-content-products">
						<?php if (woocommerce_product_loop()) { ?>
							<div class="products-category">
								<div class="title-top">
									<h1 class="title"><?php woocommerce_page_title(); ?></h1>
									<div class="filter-products d-flex align-items-center justify-content-end">
										<?php woocommerce_catalog_ordering(); ?>
									</div>
								</div>
								<div class="products-content">
									<div class="row">
										<?php if (wc_get_loop_prop('total')) {
											while (have_posts()) {
												the_post(); ?>
												<div class="col-lg-4 col-md-6 col-custom">
													<?php get_template_part('woocommerce/content', 'product'); ?>
												</div>
										<?php };
										} ?>
									</div>
								</div>
							</div>
							<?php woocommerce_pagination() ?>
						<?php } else {
							do_action('woocommerce_no_products_found');
						} ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer( 'shop' ); ?>
