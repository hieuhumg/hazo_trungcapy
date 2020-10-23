
<div class="teaching-staff m-50">
    <div class="container">
           <?php if (get_sub_field('title_why')) : ?>
               <div class="heading-title d-flex justify-content-center align-items-baseline">
                   <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
                   <div class="title">
                       <h3><?= get_sub_field('title_why'); ?>
                       </h3>
                   </div>
                   <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
               </div>
           <?php endif; ?>
           <?php if (get_sub_field('content_why')) : ?>
               <div class="heading-content text-center">
                   <p><?= get_sub_field('content_why'); ?></p>
               </div>
           <?php endif; ?>
           <?php
           if (have_rows('index')) :

                         ?>
                      <div class="program d-flex flex-wrap justify-content-center m-50">
                             <?php while (have_rows('index')) : the_row(); ?>
                          <div class="item d-flex align-items-center justify-content-center">
                              <div class="text-center">
                                  <div class="title">
                                         <?= the_sub_field('title') ?>
                                  </div>
                                  <div class="content">
                                         <?= the_sub_field('content') ?>
                                  </div>
                              </div>
                          </div>
                            <?php endwhile; ?>
                      </div>
                  <?php  endif; ?>
    </div>
</div>
