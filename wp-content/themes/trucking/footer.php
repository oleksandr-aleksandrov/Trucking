<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trucking
 */

?>

</main>

<footer class="main-footer">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-3">
                <h2 class="footer-title">
                    КОНТАКТЫ КОМПАНИИ
                </h2>
                <ul class="list-style-none p-0">
                    <li>
                        menu1
                    </li>
                    <li>
                        menu1
                    </li>
                    <li>
                        menu1
                    </li>
                    <li>
                        menu1
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="footer-title">
                    Переезды
                </h2>
                <div class="row">
                    <div class="col-md-6">
                        <?php

                        wp_nav_menu(array(
                            'theme_location' => 'footer_first_sub_menu',
                            'menu_class' => 'footer-menu-list list-style-none p-0',
                            'container' => false,
                            'depth' => 1,
                        ));
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer_second_sub_menu',
                            'menu_class' => 'footer-menu-list list-style-none p-0',
                            'container' => false,
                            'depth' => 1,
                        ));
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h2 class="footer-title">
                    КОНТАКТЫ КОМПАНИИ
                </h2>
                <ul class="list-style-none p-0 footer-contact-list">
                    <li>
                        <ul class="list-style-none p-0 footer-contact-list-phones">
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:0650454545">
                                    0650454545
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:0650454545">
                                    0650454545
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:0650454545">
                                    0650454545
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:0650454545">
                                    0650454545
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:test@gmail.com">
                            test@gmail.com
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        г. Киев, ул. ***** 48.
                    </li>
                    <li>
                        <a class="footer-link-callback" href="#">
                            Заказать звонок
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copyright-footer  position-relative">
        <div class="container position-relative">
            <div class="row">
                <a id="goTop" class="button-to-top">
                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                </a>
                <div class="col-md-12 text-center">
                    <span class="copyright-info">
                        © ? - <?php echo date('Y'); ?>
                    </span>
                </div>

            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
