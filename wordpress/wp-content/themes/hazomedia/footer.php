<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ws247
 */

?>
<div class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="logo_footer">
                <img class="img-contain" src="assets/images/logo-footer.png" alt="">
            </div>
            <div class="des">CHM International Institute</div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="sub_footer">
                        <li><span>Address:</span>
                            Golden Westlake 162A Hoang Hoa Tham, Ba Dinh, Hanoi
                        </li>
                        <li>
                            <span>Address:</span>
                            Golden Westlake 162A Hoang Hoa Tham, Ba Dinh, Hanoi
                        </li>
                        <li><span>Address:</span>
                            Golden Westlake 162A Hoang Hoa Tham, Ba Dinh, Hanoi
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="sub_footer">
                        <li><span>Email:</span>
                            info@CHM.edu.vn
                        </li>
                        <li>
                            <span>Website:</span>
                            www.CHM.edu.vn
                        </li>
                        <li><span>Facebook:</span>
                            www.facebook.com/chm.edu
                        </li>
                        <li class="d-flex">
                            <span class="mr-4">Follow Us:</span>
                            <div class="d-flex align-items-center social">
                                <img src="assets/images/social-facebook.png" alt="">
                                <img src="assets/images/social-youtube.png" alt="">
                                <img src="assets/images/social-ins.png" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</div>

<?php the_field('script_body','option') ?>
<?php wp_footer(); ?>

</body>
</html>
