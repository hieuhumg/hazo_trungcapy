<div class="management p-30 m-50">
    <div class="container">
           <?php if (get_sub_field('title_courses')): ?>
               <div class="heading-title d-flex justify-content-center align-items-baseline">
                   <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
                   <div class="title text-uppercase">
                       <h3><?= get_sub_field('title_courses') ?>
                       </h3>
                   </div>
                   <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
               </div>
           <?php endif; ?>
        <div class="management-element p-30">
            <div class="row">
                <div class="col-md-6">
                       <?php if (get_sub_field('content_course')): ?>
                           <div class="content">
                                  <?= get_sub_field('content_course') ?>
                           </div>
                       <?php endif; ?>
                </div>

                       <div class="col-md-6">
                           <div class="slide-toggle">
                               <div class="container"> <!-- fluid -->
                                   <div class="box-toggle">
                                          <?php if(get_sub_field('title_subject')): ?>
                                       <h3 class="heading">
                                          <?= get_sub_field('title_subject') ?>
                                       </h3>
                                          <?php endif; ?>
                                          <?php if (have_rows('subject')): ?>
                                          <?php while (have_rows('subject')):
                                                 the_row(); ?>
                                              <div class="contorol d-flex align-items-center justify-content-between">
                                                  <h3><?= get_sub_field('title') ?></h3>
                                                  <span class="toggle-info pull-left">
                                                   <i class="fa fa-plus"></i>
                                               </span>
                                              </div>
                                                 <?php if (get_sub_field('nhap_noi_dung')): ?>
                                              <div class="content-box">
                                                  <ul>
                                                         <?php while (have_rows('nhap_noi_dung')): the_row(); ?>
                                                             <li>
                                                                 <span>1</span>
                                                                    <?= get_sub_field('content') ?>
                                                             </li>
                                                         <?php endwhile; ?>
                                                  </ul>
                                              </div>
                                          <?php endif; ?>
                                          <?php endwhile; ?>
                                          <?php endif; ?>
                                   </div>

                               </div>
                           </div>
                       </div>

            </div>
        </div>
    </div>
</div>
<?php
wp_reset_postdata();
?>