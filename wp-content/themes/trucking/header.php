<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trucking
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow"/>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="main-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-3 col-xl-4 header-main-logo">
                <?php $logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'header_logo'); ?>
                <a class="d-block main-logo-wrapper" href="<?php bloginfo('url'); ?>">
                    <img class="img-fluid" src="<?php echo $logo[0]; ?>" alt="
                <?php bloginfo('name'); ?>"/>
                </a>
            </div>
            <div class="col-12 col-md-12 col-lg-9 col-xl-8">
                <div class="row header-information">
                    <div class="col-md-12 col-xl-8 d-flex justify-content-center justify-content-sm-between flex-wrap flex-sm-nowrap">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header_sub_menu',
                            'menu_class' => 'header-sub-menu list-style-none p-0 d-flex justify-content-start m-0',
                            'container' => false,
                            'depth' => 1,
                        ));
                        ?>
                        <ul class="header-phones list-style-none p-0 m-0 text-center">
                            <li><a href="tel:0664567778">0664567778</a></li>
                            <li><a href="tel:0664567778">0664567778</a></li>
                            <li><a href="tel:0664567778">0664567778</a></li>
                            <li><a href="tel:0664567778">0664567778</a></li>
                            <li><a href="tel:0664567778">0664567778</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <ul class="header-social-network list-style-none p-0 m-0 text-center text-md-right text-xl-center">
                            <li>
                                <a href="#">
                                    <i class="fa fa-vk" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-odnoklassniki" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row header-callback">
                    <div class="col-md-6 col-lg-3 header-callback-item mb-3">
                        <p class="time-work-info m-0">
                            Работаем без выходных <br>
                            с 8:00 до 20:00
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3 header-callback-item mb-3">
                        <p class="free-main-phone m-0">
                            <a href="tel: 0 800 750 820"> 0 800 750 820</a> <br>
                            <i>Звонки бесплатны для всех операторов!</i>
                        </p>
                    </div>
                    <div class="col-md-8 mx-auto col-lg-6 header-callback-item">
                        <div class="button-wrapper">
                            <ul class="p-0 m-0 list-style-none d-flex flex-wrap justify-content-around">
                                <li>
                                    <a class="main-button" href="">
                                        Онлайн калькулятор
                                    </a>
                                </li>
                                <li>
                                    <a class="main-button button-callback" href="">
                                        Заказать звонок
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-11 ml-auto p-0 main-nav">
                <nav class="navbar navbar-expand-lg main-menu p-0">
                    <button class="navbar-toggler mx-auto my-2 custom-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                            'menu_class' => 'header-main-menu navbar-nav header-main-menu d-flex flex-column flex-lg-row justify-md-content-end justify-content-center navbar-nav',
                            'container' => false,
                            'depth' => 2,
                            'walker' => new dropdown_walker_nav_menu()
                        ));
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<main class="main-content">