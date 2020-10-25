<div class="lecturer text-center p-30 m-50">
    <div class="container">
           <?php if (get_sub_field('staff_title')) : ?>
               <div class="heading-title d-flex justify-content-center align-items-baseline">
                   <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">

                   <div class="title text-uppercase">
                       <h3><?= get_sub_field('staff_title') ?>
                       </h3>
                   </div>
                   <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
               </div>
           <?php endif; ?>

           <?php
           $arr = get_sub_field('staff_slect');
           if ($arr): ?>
        <div class="heading-content text-center">
            <p><?= get_sub_field('staff_content') ?>
        </div>
        <div class="lecturer-items d-flex flex-wrap justify-content-center">
               <?php foreach ($arr as $post):
                      setup_postdata($post);
                      ?>
                      <?php get_template_part('template-parts/content', 'doi_ngu'); ?>
               <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <a href="" class="btn-readmore lecturer-custom">Xem thêm</a>
    </div>
</div>
</div>

<?php
wp_reset_postdata();
?>