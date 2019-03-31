<?php

include_once (__DIR__ . '/inc/functions/admin_functions.php');


add_action('after_setup_theme', function () { // регистрация меню
    register_nav_menu('top', 'Для шапки');
    register_nav_menu('footer', 'Для подвала');

    add_theme_support( 'post-thumbnails' );  // миниатюры к постам
    add_theme_support( 'title-tag' );  // авто тайтл страниц
});