<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ws247
 */
$url = get_template_directory_uri();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php the_field('script_head','option') ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="top-menu">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="<?= home_url() ?>">
                    <img class="img-contain" src="<?= the_field('logo','option') ?>" alt="">
                </a>

            </div>
            <?php
            $menu = wp_get_nav_menu_items('Main menu');
//            print_r($menu);
            ?>
            <div class="menu">
                <ul class="d-flex align-items-center">
                    <?php foreach ($menu as $value) { ?>
                    <li class=""><a href="<?= $value->url ?>"><?= $value->title ?></a>
                        <!--                        <ul>-->
                        <!--                            <li><a href="index.php">Trang chủ</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="home-2.php">Home-2</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="home-3.php">Home-3</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="timxe.php">Tìm xe</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="chitietxe.php">Chi tiết xe</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="canbanxe.php">Cần bán xe</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="candoixe.php">Cần đổi xe</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="candoixe-2.php">Cần đổi xe 2</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="candoixe-3.php">Cần đổi xe 3</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="candoixe-4.php">Cần đổi xe 4</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="candoixe-5.php">Cần đổi xe 5</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="candoixe-6.php">Cần đổi xe 6</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="candoixe-7.php">Cần đổi xe 7</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="danhsachdaily.php">Danh sách đại lý</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="danhsachdaily-2.php">Danh sách đại lý 2</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="gioithieu.php">Giới thiệu</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="sosanhxe.php">So sánh xe</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="sosanhxe-2.php">So sánh xe 2</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="contact.php">Liên hệ</a>-->
                        <!--                            </li>-->
                        <!--                            <li><a href="contact.php">Liên hệ</a>-->
                        <!--                            </li>-->
                        <!--                        </ul>-->
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

</div>