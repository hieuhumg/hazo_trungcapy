<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hazo
 */

?>
<div class="footer">
    <div class="backfround-color"
         style="background-image: url(<?php the_field('f1_background','option') ?>);background-repeat: no-repeat; background-position: top right">
        <div class="container">
            <div class="footer-content">
                <div class="logo_footer">
                       <?php
                       $custom_logo_id = get_theme_mod('custom_logo');
                       $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                       printf('<a href="%1$s" title="%2$s"><img class="img-contain" src="%3$s"></a>',
                              get_bloginfo('url'),
                              get_bloginfo('description'),
                              get_field('logo_footer','option')
                       );
                       ?>
                </div>
                <div class="des the_content">
                       <?php if (get_field('footer_content', 'option')): ?>
                              <?= get_field('footer_content', 'option'); ?>
                       <?php endif; ?>
                </div>
                <div class="row">
                       <?php if (have_rows('f1_info', 'option')): ?>
                           <div class="col-md-6">
                               <ul class="sub_footer">
                                      <?php while (have_rows('f1_info', 'option')) {
                                             the_row();
                                             ?>
                                          <li><span><?= get_sub_field('t1_footer_title') ?></span>
                                                 <?= get_sub_field('t1_foooter_content') ?>
                                          </li>
                                      <?php } ?>
                               </ul>
                           </div>
                       <?php endif ?>

                           <div class="col-md-6">

                               <ul class="sub_footer">
                                      <?php if (have_rows('f2_info', 'option')): ?>
                                      <?php while (have_rows('f2_info', 'option')) {
                                           the_row();
                                             ?>
                                          <li><span><?= get_sub_field('t2_footer_title','option');  ?></span>
                                                 <?= get_sub_field('t2_footer_content','option') ?>
                                          </li>
                                      <?php } ?>
                                      <?php endif ?>
                                   <li class="d-flex">
                                       <span class="mr-4">Follow Us:</span>
                                       <div class="d-flex align-items-center social">
                                              <?php if (have_rows('f3_social', 'option')):
                                                     while (have_rows('f3_social', 'option')) : the_row();
                                                            ?>
                                                         <a target="_blank" rel="nofollow"
                                                            href="<?= get_sub_field('social_title', 'option'); ?>">
                                                                <?php echo wp_get_attachment_image(get_sub_field('social_select', 'option'), 'full'); ?>
                                                         </a>
                                                     <?php
                                                     endwhile;
                                              endif;
                                              ?>
                                       </div>
                                   </li>
                               </ul>

                           </div>

                </div>

            </div>

        </div>
    </div>

</div>
<?php if (get_field('f4_copyright', 'option')): ?>
    <div class="copyright text-center">
           <?= the_field('f4_copyright', 'option') ?>
    </div>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
