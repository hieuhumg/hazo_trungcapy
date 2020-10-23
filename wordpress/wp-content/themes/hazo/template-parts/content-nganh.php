<div class="item">
       <img src="<?php hazo_post_thumbnail() ?>" alt="<?php the_title() ?>">
       <div class="title text-center">
              <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
       </div>
       <div class="content text-center">
              <?php echo excerpt(20) ?>
       </div>
       <a href="<?php the_permalink() ?>" class="btn-readmore"><?php _e('Tìm hiểu thêm','hazo') ?></a>
</div>
