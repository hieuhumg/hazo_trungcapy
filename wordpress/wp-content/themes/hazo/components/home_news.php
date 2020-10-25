<!--Tin tức sự kiện-->
<div class="news text-center p-30 m-50">
    <div class="container">
           <?php if (get_sub_field('title_news')) : ?>
               <div class="heading-title d-flex justify-content-center align-items-baseline">
                   <img src="<?= get_template_directory_uri() ?>/assets/images/color-1.png" alt="">
                   <div class="title text-uppercase">
                       <h3><?= get_sub_field('title_news') ?>
                       </h3>
                   </div>
                   <img src="<?= get_template_directory_uri() ?>/assets/images/color-2.png" alt="">
               </div>
           <?php endif; ?>
           <?php
           $args = array(
                  'type' => 'post',
                  'hide_empty' => 0,
                  'child_of' => 0,
           );
        $categories = get_categories($args);
        ?>
        <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
            <?php foreach ($categories as $value) : ?>
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home <?= $value->term_id ?>" role="tab"
                   aria-controls="home" aria-selected="true"><?= $value->name ?></a>
            </li>
            <?php endforeach; ?>
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
wp_reset_postdata();
?>