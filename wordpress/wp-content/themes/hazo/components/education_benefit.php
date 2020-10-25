<div class="benefit m-50">
    <div class="container">
        <?php if(get_sub_field('title_benefit')): ?>
        <div class="heading-title d-flex justify-content-center align-items-baseline">
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
            <div class="title">
                <h3><?= get_sub_field('title_benefit'); ?>
                </h3>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
        </div>
        <?php endif;  ?>
        <?php
            if(have_rows('benefit_add_content')) :
        ?>
        <div class="benefit-element p-30">
            <div class="row">
                <?php while(have_rows('benefit_add_content')) : the_row(); ?>
                <div class="col-md-12">
                    <div class="fancy-content d-flex align-items-center">
                        <div class="fancy-icon">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/facy-item.png" alt="">
                        </div>
                        <div class="content-wrap">
                            <h3 class="fancy-title">
                                <?= get_sub_field('content'); ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>

</div>
<?php
wp_reset_postdata();
?>