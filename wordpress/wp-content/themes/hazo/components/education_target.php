<div class="course m-50">
    <div class="container">
        <?php if((get_sub_field('title_target'))): ?>
        <div class="heading-title d-flex justify-content-center align-items-baseline">
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
            <div class="title">
                <h3><?= get_sub_field('title_target') ?>
                </h3>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
        </div>
        <?php endif; ?>
        <div class="course-element p-30">
            <div class="row">
                <?php if(get_sub_field('image_target')): ?>
                <div class="col-md-6">
                    <div class="content-media h-100">
                        <img class="img-cover" src="<?= get_sub_field('image_target') ?>" alt="">
                    </div>
                </div>
                <?php endif; ?>
                <?php if(have_rows('list_target')): ?>
                <div class="col-md-6">
                    <div class="content h-100">
                        <ul>
                            <?php while (have_rows('list_target')): the_row();?>
                            <li>
                                <?php if(get_sub_field('number')): ?>
                                <span>
                                    <img src="<?= get_sub_field('number') ?>" alt="">
                                </span>
                                <?php endif; ?>
                                <span>Sau khi tốt nghiệp ngành học Quản trị Khách sạn, học viên nắm kiến thức toàn diện về môi trường khách sạn quốc tế với triển vọng nắm giữ nhiều vị trí được săn đón cao trong ngành.</span>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php
wp_reset_postdata();
?>