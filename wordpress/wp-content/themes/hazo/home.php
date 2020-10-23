<?php
/**
 * Template Name: Home
 */

get_header();
?>
<?php
if (have_rows('home_components')) {
       while (have_rows('home_components')) : the_row();
              $module_name = get_row_layout();
              switch ($module_name):
                     case $module_name:
                            get_template_part('components/' . $module_name);
              endswitch;
       endwhile;
}
?>

    <!--banner quảng cáo-->
    <div class="banner-quangcao p-30 m-50">
        <a href="">
            <img src="<?= get_template_directory_uri() ?>/assets/images/banner-quangcao.png" alt="">
        </a>
    </div>


    <!--Tin tức sự kiện-->
    <div class="news text-center p-30 m-50">
        <div class="container">
            <div class="heading-title d-flex justify-content-center align-items-baseline">
                <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
                <div class="title text-uppercase">
                    <h3>TIN TỨC – SỰ KIỆN
                    </h3>
                </div>
                <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                       aria-controls="home" aria-selected="true">Tin tức sự kiện</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile" aria-selected="false">Cơ hội nghề nghiệp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile" aria-selected="false">Tuyển sinh 2020</a>
                </li>
            </ul>

            <div class="tab-features" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item position-relative">
                                <div class="image">
                                    <img class="img-cover"
                                         src="<?= get_template_directory_uri() ?>/assets/images/gd.jpg" alt="">
                                </div>
                                <div class="title text-uppercase">
                                    <a href="">
                                        Những góc khuất ngành quản trị khách sạn không phải ai cũng biết
                                    </a>

                                </div>
                                <div class="down position-absolute"
                                     style="background: url(<?= get_template_directory_uri() ?>/assets/images/tr.jpg) no-repeat center">
                                    <div class="title">
                                        <a href="">"Những góc khuất ngành quản trị khách sạn không phải ai cũng
                                            biết"</a>

                                    </div>
                                    <div class="content">
                                        Những góc khuất ngành quản trị khách sạn không phải ai cũng biết,Những góc khuất
                                        ngành quản trị khách sạn không phải ai cũng biết
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item position-relative">
                                <div class="image">
                                    <img class="img-cover"
                                         src="<?= get_template_directory_uri() ?>/assets/images/gd.jpg" alt="">
                                </div>
                                <div class="title text-uppercase">
                                    <a href="">
                                        Những góc khuất ngành quản trị khách sạn không phải ai cũng biết
                                    </a>

                                </div>
                                <div class="down position-absolute"
                                     style="background: url(<?= get_template_directory_uri() ?>/assets/images/tr.jpg) no-repeat center">
                                    <div class="title">
                                        <a href="">"Những góc khuất ngành quản trị khách sạn không phải ai cũng
                                            biết"</a>

                                    </div>
                                    <div class="content">
                                        Những góc khuất ngành quản trị khách sạn không phải ai cũng biết,Những góc khuất
                                        ngành quản trị khách sạn không phải ai cũng biết
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item position-relative">
                                <div class="image">
                                    <img class="img-cover"
                                         src="<?= get_template_directory_uri() ?>/assets/images/gd.jpg" alt="">
                                </div>
                                <div class="title text-uppercase">
                                    <a href="">
                                        Những góc khuất ngành quản trị khách sạn không phải ai cũng biết
                                    </a>

                                </div>
                                <div class="down position-absolute"
                                     style="background: url(<?= get_template_directory_uri() ?>/assets/images/tr.jpg) no-repeat center">
                                    <div class="title">
                                        <a href="">"Những góc khuất ngành quản trị khách sạn không phải ai cũng
                                            biết"</a>

                                    </div>
                                    <div class="content">
                                        Những góc khuất ngành quản trị khách sạn không phải ai cũng biết,Những góc khuất
                                        ngành quản trị khách sạn không phải ai cũng biết
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">-->
                <!--                <div class="features-box features-box-slider">-->
                <!--                    <div class="item">-->
                <!--                        <div class="image">-->
                <!--                            <img class="img-cover" src=""-->
                <!--                                 alt="">-->
                <!--                        </div>-->
                <!--                        <div class="content">-->
                <!--                            b-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
            </div>
        </div>
        <a href="" class="btn-readmore lecturer-custom">Xem thêm</a>
    </div>

<?php
get_footer();
