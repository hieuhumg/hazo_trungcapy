<div class="course course-2 m-50"
     style="background: url(<?= get_template_directory_uri() ?>/assets/images/BG-category_green-scaled.jpg) no-repeat center">
    <div class="container">
        <?php if(get_sub_field('title_why_chose')): ?>
        <div class="heading-title d-flex justify-content-center align-items-baseline">
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
            <div class="title text-center">
                <h3 style="color: #fff"><?= get_sub_field('title_why_chose') ?>
                </h3>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
        </div>
        <?php endif; ?>

        <div class="course-element p-30">
            <div class="row">
                   <?php if(have_rows('cac_ly_do')): ?>
                <div class="col-md-6">
                    <div class="content h-100">
                        <ul>
                            <?php while(have_rows('cac_ly_do')) : the_row(); ?>
                            <li>
                                <span>
                                    <?= wp_get_attachment_image(get_sub_field('number'),'full'); ?>
                                </span>
                                <span><?= get_sub_field('content') ?></span>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-md-6">

                    <div class="content-media ">
                           <?php
                           if(get_sub_field('id_youtube')) {
                                  ?>
                               <iframe width="100%" height="315"
                                       src="https://www.youtube.com/embed/<?= get_sub_field('id_youtube') ?>">
                               </iframe>
                                  <?php
                           }else {
                               ?>
                                  <?= wp_get_attachment_image(get_sub_field('img'),'full'); ?>
                               <?php
                           }
                           ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
wp_reset_postdata();
?>