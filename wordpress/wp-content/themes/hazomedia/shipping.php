<?php
/**
Template Name: Woocommerce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php the_field('script_head','option') ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php the_post(); ?>
	<div class="gini-shipping">
		<div class="shipping-header">
			<div class="container">
				<div class="row m-0">
					<div class="col-lg-2 d-lg-flex d-none gini-logo justify-content-center align-items-center">
						<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						printf ('<a href="%1$s" title="%2$s"><img src="%3$s"></a>',
							get_bloginfo('url'),
							get_bloginfo('description'),
							$image[0]
						);
						?>
					</div>
					<div class="col-lg-8 p-0 m-0">
						<div class="row bs-wizard ">
							<div class="col-lg-4 col-md-4 col-4 col-sm-4 bs-wizard-step p-0 step-1">
								<div class="text-center bs-wizard-stepnum">
									<span><a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>">Giỏ hàng</a></span>
								</div>
								<div class="progress"><div class="progress-bar"></div></div>
								<span class="bs-wizard-dot">1</span>
							</div>
							<div class="col-lg-4 col-md-4 col-4 col-sm-4 bs-wizard-step p-0 step-2">
								<div class="text-center bs-wizard-stepnum">
									<span><a href="<?php echo get_permalink( wc_get_page_id( 'checkout' ) ); ?>">Thanh toán</a></span>
								</div>
								<div class="progress"><div class="progress-bar"></div></div>
								<span class="bs-wizard-dot">2</span>
							</div>
							<div class="col-lg-4 col-md-4 col-4 col-sm-4 bs-wizard-step p-0 step-3">
								<div class="text-center bs-wizard-stepnum">
									<span>Hoàn thành</span>
								</div>
								<div class="progress"><div class="progress-bar"></div></div>
								<span class="bs-wizard-dot">3</span>
							</div>
						</div>
					</div>
					<div class="col-lg-2 d-lg-flex d-none gini-hotline justify-content-center align-items-center">
						<a class="d-flex align-items-center" href="tel:<?php the_field('hd1_phone','option') ?>">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 485.213 485.212" style="enable-background:new 0 0 485.213 485.212;" xml:space="preserve" class=""><g><g>
								<path d="M242.607,0C108.629,0,0.001,108.628,0.001,242.606c0,133.976,108.628,242.606,242.606,242.606   c133.978,0,242.604-108.631,242.604-242.606C485.212,108.628,376.585,0,242.607,0z M370.719,353.989l-19.425,19.429   c-3.468,3.463-13.623,5.624-13.949,5.624c-61.452,0.536-120.621-23.602-164.095-67.08c-43.593-43.618-67.759-102.998-67.11-164.657   c0-0.028,2.224-9.892,5.689-13.324l19.424-19.427c7.108-7.141,20.762-10.368,30.327-7.168l4.086,1.363   c9.537,3.197,19.55,13.742,22.185,23.457l9.771,35.862c2.635,9.743-0.919,23.604-8.025,30.712l-12.97,12.972   c12.734,47.142,49.723,84.138,96.873,96.903l12.965-12.975c7.141-7.141,20.997-10.692,30.719-8.061l35.857,9.806   c9.717,2.67,20.26,12.62,23.456,22.154l1.363,4.145C381.028,333.262,377.826,346.913,370.719,353.989z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#00B6F0"/>
							</g></g> </svg>
							<span style="padding-left: 5px;"><?php the_field('hd1_phone','option') ?><small><?php the_field('woo_time','option') ?></small></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="pt-4 pb-4 gini-main">
			<div class="container">
				<h1 class="gini-h1"><?php the_title() ?></h1>
					<?php the_content() ?>
			</div>
		</div>
	</div>

<?php 
get_footer();
?>