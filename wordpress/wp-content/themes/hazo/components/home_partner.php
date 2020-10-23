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
        <div class="partner-list">
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-1.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-2.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-3.png" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-4.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-1.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-2.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-3.png" alt="">
            </div>
        </div>
    </div>
</div>
<?php
wp_reset_postdata();
?>