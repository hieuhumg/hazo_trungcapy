

<div class="educate p-30 m-50">
       <div class="container">
              <div class="heading-title d-flex justify-content-center align-items-baseline">
                     <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
                     <div class="title">
                            <h3><?=  get_sub_field('education_title') ?>
                            </h3>
                     </div>
                     <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
              </div>
              <?php
              global $post;
              $edu = get_sub_field('education_program');
              if( $edu ): ?>
              <div class="row">
                     <?php foreach($edu  as $post ) :
                     setup_postdata($post); ?>
                     <div class="col-md-4">
<?php get_template_part('template-parts/content','nganh') ?>
                     </div>
                     <?php endforeach; ?>
              </div>
              <?php
              endif;
              wp_reset_postdata();
              ?>
       </div>
</div>
