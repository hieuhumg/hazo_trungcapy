<div class="partner p-30 m-50">
    <div class="container">
        <?php if(get_sub_field('partner_title')) : ?>
        <div class="heading-title d-flex justify-content-center align-items-baseline">
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
            <div class="title text-uppercase">
                <h3><?= get_sub_field('partner_title'); ?>
                </h3>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
        </div>
        <?php endif; ?>
        <?php if(have_rows('add_partner')) : ?>
        <div class="partner-list">
            <?php while (have_rows('add_partner')) : the_row(); ?>
            <div class="item">
                <?= wp_get_attachment_image(get_sub_field('image','option'), 'full') ?>
            </div>
            <?php endwhile; ?>wp_get_attachment_image
        </div>
        <?php endif; ?>
    </div>
</div>
<?php
wp_reset_postdata();
?>