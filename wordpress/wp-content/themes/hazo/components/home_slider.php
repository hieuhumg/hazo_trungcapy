<?php
if (have_rows('re')) { ?>
    <div class="banner">
           <?php
           while (have_rows('re')) : the_row();
                  ?>
               <div class="item d-flex align-items-end"
                    style="background: url(<?php the_sub_field('img'); ?>) no-repeat center">
                   <div class="container">
                       <div class="banner_title d-flex justify-content-between align-items-end ">
                           <div>
                               <h3><?php the_sub_field('title'); ?></h3>
                               <p><span><?php the_sub_field('content'); ?>
                               </p>
                           </div>
                           <a href="<?php the_sub_field('link'); ?>" class="btn-readmore">Xem thêm</a>
                       </div>
                   </div>
               </div>
           <?php endwhile; ?>

    </div>
<?php } ?>