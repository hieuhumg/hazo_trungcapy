<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ws247
 */

get_header();
?>

	<div class="new">
           <div class="container">
               <div class="the_content">
                      <?php if (have_posts()) : ?>
                             <?php while (have_posts()) : the_post(); ?>
                              <div class="heading-title d-flex justify-content-center align-items-baseline">
                                  <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
                                  <div class="title">
                                      <h3><?php the_title(); ?>
                                      </h3>
                                  </div>
                                  <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
                              </div>
                             <div class="content_detail">
                                    <?php the_content(); // lấy toàn bộ nội dung bài post ?>
                             </div>
                              <div class="meta"><?php echo get_the_date('d - m -Y'); // lấy ngày post bài ?></div>
<!--                                    --><?php //the_excerpt(); // Lấy mô tả ngắn của bài post ?>
<!--                                    --><?php //the_category(); // lấy category của bài post này ?>
                             <?php endwhile; ?>
                      <?php endif; ?>
               </div>
           </div>




	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
