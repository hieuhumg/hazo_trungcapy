<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<main>
	<section class="page-banner" style="background-image:url(<?php the_field('b1_banner','option') ?>);">
		<div class="container text-center">
			<h1 class="title"><?php woocommerce_page_title(); ?></h1>
		</div>
	</section>
	<?php get_template_part( 'template-parts/breadcrumb', '' ); ?>
	<section class="single-container">
		<div class="container">
			<div class="products-slider">
				<div class="row">
					<div class="col-lg-7 position-relative">
						<?php while(have_posts()): the_post(); ?>
							<?php global $product; ?>
							<?php $attachment_ids = $product->get_gallery_image_ids();?>
						<?php endwhile ?>
						<div class="slider-for">
							<div class="item">
								<a data-fancybox="img" href="<?php ws247_post_thumbnail_full() ?>" title="<?php the_title() ?>">
									<img src="<?php ws247_post_thumbnail_full() ?>" alt="<?php the_title() ?>">
								</a>
							</div>
							<?php if ( $attachment_ids && $product->get_image_id() ) { ?>
								<?php foreach ( $attachment_ids as $attachment_id ) { ?>
									<div class="item">
										<a data-fancybox="img" href="<?php echo $image_link = wp_get_attachment_url( $attachment_id ) ?>" title="<?php the_title() ?>">
											<img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ) ?>" alt="<?php the_title() ?>">
										</a>
									</div>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="slider-nav">
							<div class="item">
								<img src="<?php ws247_post_thumbnail_full() ?>" alt="<?php the_title() ?>">
							</div>
							<?php if ( $attachment_ids && $product->get_image_id() ) { ?>
								<?php foreach ( $attachment_ids as $attachment_id ) { ?>
									<div class="item">
										<img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ) ?>" alt="<?php the_title() ?>">
									</div>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="sale"><?php woocommerce_show_product_loop_sale_flash() ?></div>
					</div>
					<div class="col-lg-5">
						<div class="single-product__content">
							<h1><?php the_title(); ?></h1>
							<div class="raiting woocommerce">
								<?php woocommerce_template_loop_rating(); ?>
							</div>
							<div class="price-sale">
								<?php woocommerce_show_product_loop_sale_flash() ?>
								<?php woocommerce_template_loop_price() ?>
							</div>
							<div class="description">
								<span>Mô tả:</span>
								<?php woocommerce_template_single_excerpt() ?>
							</div>
							<div class="add-tocart">
								<?php woocommerce_template_single_add_to_cart() ?>
							</div>
							<div class="tags">
								<?php $term_list = wp_get_post_terms(  $post->ID, 'product_tag', array( 'fields' => 'all' ) ); ?>
								<?php if($term_list){ ?>
									<span>Tags: </span>
									<?php foreach( $term_list as $term ): ?>
										<a href="<?php echo get_term_link($term) ?>"><?php echo $term->name; ?></a>
									<?php endforeach; ?>
								<?php } ?>
							</div>
						</div>
				</div>
			</div>
			<div class="single-the_content">
				<div class="info__title">
					<ul class="nav">
						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab1">Thông tin sản phẩm</a></li>
						<?php
						if (comments_open()) :
						?>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab2">Đánh giá sản phẩm</a></li>
						<?php endif;
						?>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="tab1">
						<div class="info__detail">
							<div class="info__detail-text">
								<div class="the_content js-content" id="hi">
									<?php
									while ( have_posts() ) :
										the_post();
										the_content();
									endwhile;
									?>
									<?php wp_reset_postdata(); ?>
								</div>
							</div>
							<p class="show-more">
								<a href="#hi" class="js-dt">Đọc thêm <i class="fa fa-caret-down"></i>
									<a href="javascript:;" class="js-tg">Thu gọn <i class="fa fa-caret-up"></i>
								</a>
							</p>
						</div>
					</div>
					<?php
					if (comments_open() || get_comments_number()) :
					?>
						<div class="tab-pane fade" id="tab2">
							<?php comments_template(); ?>
						</div>
					<?php endif;
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="single-form">
		<div class="container">
			<div class="title-main">
				<h2 class="heading">THIẾT KẾ NHANH</h2>
			</div>
			<div class="row">
				<div class="col-md-7">
					<form>
						<div class="form-group">
							<label class="d-block">Chọn mẫu</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="related__product">
		<div class="container">
			<h2 class="title-custom">Sản phẩm cùng loại</h2>
			<?php
			$custom_taxterms = wp_get_object_terms($post->ID, 'product_cat', array('fields' => 'ids'));
			$args = array(
				'post_type' => 'product',
				'post_status' => 'publish',
				'posts_per_page' => 10,
				'orderby' => 'rand',
				'tax_query' => array(
					array(
						'taxonomy' => 'product_cat',
						'field' => 'id',
						'terms' => $custom_taxterms
					)
				),
				'post__not_in' => array($post->ID),
			);
			$related_items = new WP_Query($args);
			if ($related_items->have_posts()) : ?>
				<div class="owl-theme sl-products owl-carousel">
					<?php while ($related_items->have_posts()) : $related_items->the_post(); ?>
						<div class="item">
							<?php get_template_part('woocommerce/content', 'product'); ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif;
			wp_reset_postdata(); ?>
		</div>
	</section>
</main>


<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
