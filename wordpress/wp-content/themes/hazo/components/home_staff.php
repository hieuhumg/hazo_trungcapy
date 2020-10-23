<?php

$the_query = new WP_Query($args = array(
       'post_type' => 'doi_ngu',
       'posts_per_page' => 10,
));
if ($the_query->have_posts()) :
       ?>
    <!--       --><?php //get_template_part( 'template-parts/content', get_post_type() );
       ?>

    <div class="lecturer text-center p-30 m-50">
        <div class="container">
               <?php if (get_sub_field('staff_title')) : ?>
                   <div class="heading-title d-flex justify-content-center align-items-baseline">
                       <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">

                       <div class="title text-uppercase">
                           <h3><?=  get_sub_field('staff_title') ?>
                           </h3>
                       </div>
                       <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
                   </div>
               <?php endif; ?>
       <?php if (get_sub_field('staff_content')) : ?>
            <div class="heading-content text-center">
                <p><?= get_sub_field('staff_content'); ?></p>
            </div>
       <?php endif; ?>
            <div class="lecturer-items d-flex flex-wrap justify-content-center">
                   <?php while ($the_query->have_posts()) : $the_query->the_post();
                          get_template_part('template-parts/content', get_post_type());
                   endwhile; ?>
            </div>
            <a href="" class="btn-readmore lecturer-custom">Xem thêm</a>
        </div>
    </div>

<?php endif;
wp_reset_postdata();
?>