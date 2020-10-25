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



<?php
get_footer();
