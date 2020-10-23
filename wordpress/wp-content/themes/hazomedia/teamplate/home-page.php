<?php
/*
       Template Name: Trang chủ
*/
get_header();
?>

<!--banner-->
<div class="banner">
    <div class="item d-flex align-items-end" style="background: url(<?= get_template_directory_uri() ?>/assets/images/banne-2.jpg) no-repeat center">
        <div class="container">
            <div class="banner_title d-flex justify-content-between align-items-end ">
                <div>
                    <h3>Học viện quốc tế CHM</h3>
                    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A sicing elit. A adipisci aperiam, atque
                    </p>
                </div>
                <a href="" class="btn-readmore">Xem thêm</a>
            </div>
        </div>
    </div>
    <div class="item d-flex align-items-end" style="background: url(<?= get_template_directory_uri() ?>/assets/images/banne-2.jpg) no-repeat center">
        <div class="container">
            <div class="banner_title d-flex justify-content-between align-items-end ">
                <div>
                    <h3>Học viện quốc tế CHM</h3>
                    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A sicing elit. A adipisci aperiam, atque
                    </p>
                </div>
                <a href="" class="btn-readmore"><?php _e('Xem thêm','hazo') ?></a>
            </div>
        </div>

    </div>


</div>
<!--Tại sao chọn-->
<div class="teaching-staff m-50">
    <div class="container">
        <div class="heading-title d-flex justify-content-center align-items-baseline">
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
            <div class="title">
                <h3><?= the_field('why_title'); ?>
                </h3>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
        </div>
        <div class="heading-content text-center">
            <p><?= the_field('why_content'); ?></p>
        </div>
        <div class="program d-flex flex-wrap justify-content-center m-50">
            <?php
            $why_index = get_field('why_index');
            if(count($why_index) > 0) {
                foreach ($why_index as $item) {
            ?>
            <div class="item d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <div class="title">
                        <?= $item['why_title_sub'] ?>
                    </div>
                    <div class="content">
                           <?= $item['why_content_sub'] ?>>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</div>

<div class="educate p-30 m-50">
    <div class="container">
        <div class="heading-title d-flex justify-content-center align-items-baseline">
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
            <div class="title">
                <h3>CHƯƠNG TRÌNH ĐÀO TẠO
                </h3>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="item">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/educate-1.jpg" alt="">
                    <div class="title text-center">
                        <a href="">Nghệ thuật Ẩm thực</a>
                    </div>
                    <div class="content text-center">
                        Đào tạo kiến thức và kỹ năng Bếp Á, Bếp Âu, món tráng miệng từ cơ bản đến chuyên sâu. Học viên
                        được thực hành 1-1 với bếp riêng tiêu…

                    </div>
                    <a href="" class="btn-readmore">Tìm hiểu thêm</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/educate-2.jpg" alt="">
                    <div class="title text-center">
                        <a href="">Quản trị Khách sạn</a>
                    </div>
                    <div class="content text-center">
                        Học viên được trang bị bộ kiến thức và kỹ năng hoàn chỉnh về Quản trị Khách sạn theo chuẩn Anh
                        quốc, nền tằng để trở thành nhà quản lý…
                    </div>
                    <a href="" class="btn-readmore">Tìm hiểu thêm</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/educate-3.jpg" alt="">
                    <div class="title text-center">
                        <a href="">Nghệ thuật Làm bánh</a>
                    </div>
                    <div class="content text-center">
                        Đào tạo kiến thức và kỹ năng từ cơ bản đến chuyên sâu về làm bánh chuyên nghiệp cũng như liên
                        tục cải thiện sự tinh tế và sáng tạo…
                    </div>
                    <a href="" class="btn-readmore">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--banner-->
<div class="banner-quangcao p-30 m-50">
    <a href="">
        <img src="<?= get_template_directory_uri() ?>/assets/images/banner-quangcao.png" alt="">
    </a>
</div>
<!--đội ngũ giảng viên-->
<div class="lecturer text-center p-30 m-50">
    <div class="container">
        <div class="heading-title d-flex justify-content-center align-items-baseline">
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
            <div class="title text-uppercase">
                <h3>Đội ngũ giảng viên
                </h3>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
        </div>
        <div class="heading-content text-center">
            <p>Đội ngũ giảng viên nổi tiếng trong ngành, đã có nhiều năm giảng dạy lĩnh vực Quản lý Khách sạn,
                Nghệ thuật Ẩm thực, từng giữ những vai trò quản lý cao cấp tại các tập đoàn khách sạn lớn trên
                thế giới như: Accor, Marriott, IHG, … với phong cách giảng dạy cuốn hút và đầy chuyên nghiệp.</p>
        </div>
        <div class="lecturer-items d-flex flex-wrap justify-content-center">
            <div class="item">
                <div class="lecturer-thumb">
                    <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/g1.jpg" alt="">
                </div>
                <div class="lecturer-title">
                    David Vu (Vũ Tất Đạt)
                </div>
            </div>
            <div class="item">
                <div class="lecturer-thumb">
                    <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/g2.jpg" alt="">
                </div>
                <div class="lecturer-title">
                    David Vu (Vũ Tất Đạt)
                </div>
            </div>
            <div class="item">
                <div class="lecturer-thumb">
                    <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/g3.jpg" alt="">
                </div>
                <div class="lecturer-title">
                    David Vu (Vũ Tất Đạt)
                </div>
            </div>
            <div class="item">
                <div class="lecturer-thumb">
                    <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/g4.jpg" alt="">
                </div>
                <div class="lecturer-title">
                    David Vu (Vũ Tất Đạt)
                </div>
            </div>
            <div class="item">
                <div class="lecturer-thumb">
                    <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/g5.jpg" alt="">
                </div>
                <div class="lecturer-title">
                    David Vu (Vũ Tất Đạt)
                </div>
            </div>
            <div class="item">
                <div class="lecturer-thumb">
                    <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/g1.jpg" alt="">
                </div>
                <div class="lecturer-title">
                    David Vu (Vũ Tất Đạt)
                </div>
            </div>
            <div class="item">
                <div class="lecturer-thumb">
                    <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/g4.jpg" alt="">
                </div>
                <div class="lecturer-title">
                    David Vu (Vũ Tất Đạt)
                </div>
            </div>
            <div class="item">
                <div class="lecturer-thumb">
                    <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/g5.jpg" alt="">
                </div>
                <div class="lecturer-title">
                    David Vu (Vũ Tất Đạt)
                </div>
            </div>
            <div class="item">
                <div class="lecturer-thumb">
                    <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/g1.jpg" alt="">
                </div>
                <div class="lecturer-title">
                    David Vu (Vũ Tất Đạt)
                </div>
            </div>
        </div>
        <a href="" class="btn-readmore lecturer-custom">Xem thêm</a>
    </div>
</div>

<!--Đối tác-->
<div class="partner p-30 m-50">
    <div class="container">
        <div class="heading-title d-flex justify-content-center align-items-baseline">
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
            <div class="title text-uppercase">
                <h3>ĐỐI TÁC CỦA CHÚNG TÔI
                </h3>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
        </div>

        <div class="partner-list">
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-1.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-2.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-3.png" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-4.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-1.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-2.jpg" alt="">
            </div>
            <div class="item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/partner-3.png" alt="">
            </div>
        </div>
    </div>
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
                                <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/gd.jpg" alt="">
                            </div>
                            <div class="title text-uppercase">
                                <a href="">
                                    Những góc khuất ngành quản trị khách sạn không phải ai cũng biết
                                </a>

                            </div>
                            <div class="down position-absolute" style="background: url(<?= get_template_directory_uri() ?>/assets/images/tr.jpg) no-repeat center">
                                <div class="title">
                                    <a href="">"Những góc khuất ngành quản trị khách sạn không phải ai cũng biết"</a>

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
                                <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/gd.jpg" alt="">
                            </div>
                            <div class="title text-uppercase">
                                <a href="">
                                    Những góc khuất ngành quản trị khách sạn không phải ai cũng biết
                                </a>

                            </div>
                            <div class="down position-absolute" style="background: url(<?= get_template_directory_uri() ?>/assets/images/tr.jpg) no-repeat center">
                                <div class="title">
                                    <a href="">"Những góc khuất ngành quản trị khách sạn không phải ai cũng biết"</a>

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
                                <img class="img-cover" src="<?= get_template_directory_uri() ?>/assets/images/gd.jpg" alt="">
                            </div>
                            <div class="title text-uppercase">
                                <a href="">
                                    Những góc khuất ngành quản trị khách sạn không phải ai cũng biết
                                </a>

                            </div>
                            <div class="down position-absolute" style="background: url(<?= get_template_directory_uri() ?>/assets/images/tr.jpg) no-repeat center">
                                <div class="title">
                                    <a href="">"Những góc khuất ngành quản trị khách sạn không phải ai cũng biết"</a>

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
?>
