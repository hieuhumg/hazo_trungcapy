<section class="site-slider">
	<?php if(have_rows('h1_slider','option')){ ?>
		<div class="owl-theme sl-slider owl-carousel">
			<?php while(have_rows('h1_slider','option')): the_row() ?>
				<div class="item" style="background-image: url(<?php the_sub_field('h1_images') ?>);">
					<div class="text">
						<h2 class="animation animation--h2"><?php the_sub_field('h1_title') ?></h2>
						<p class="animation animation--p"><?php the_sub_field('h1_des') ?></p>
						<a class="btn-more animation animation--btn" href="<?php the_sub_field('h_link') ?>">Xem thêm</a>
					</div>
				</div>
			<?php endwhile ?>
			<?php wp_reset_postdata(); ?>
		</div>
	<?php } ?>
</section>