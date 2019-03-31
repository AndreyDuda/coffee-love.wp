<?php

include_once (__DIR__ . '/inc/functions/admin_functions.php');

add_action('wp_enqueue_scripts', function (){

    wp_enqueue_style('fonts_googleapis', '//fonts.googleapis.com/css?family=Cuprum:400,400italic,700&subset=latin-ext,latin,cyrillic');
    wp_enqueue_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
    wp_enqueue_style('simpletextrotator_css', get_template_directory_uri() . '/assets/css/simpletextrotator.css');
    wp_enqueue_style('font-awesome_css', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
    wp_enqueue_style('animate_css', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('style_base', get_template_directory_uri() . '/assets/css/style.base.css');
    wp_enqueue_style('style_as_css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('style_mobile_css', get_template_directory_uri() . '/assets/css/style.mobile.css');
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');

    add_action('wp_footer', function (){
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js');
        wp_enqueue_script('backstretch_js', get_template_directory_uri() . '/assets/js/jquery.backstretch.min.js');
        wp_enqueue_script('simple-text-rotator_js', get_template_directory_uri() . '/assets/js/jquery.simple-text-rotator.min.js');
        wp_enqueue_script('waypoints_js', get_template_directory_uri() . '/assets/js/jquery.waypoints.js');
        wp_enqueue_script('countTo_js', get_template_directory_uri() . '/assets/js/jquery.countTo.js');
        wp_enqueue_script('wow_js', get_template_directory_uri() . '/assets/js/wow.min.js');
        wp_enqueue_script('smoothscroll_js', get_template_directory_uri() . '/assets/js/smoothscroll.js');
        wp_enqueue_script('custom_js', get_template_directory_uri() . '/assets/js/custom.js');
        wp_enqueue_script('landing_js', get_template_directory_uri() . '/assets/js/landing.js');

    });
});

add_action('after_setup_theme', function () { // регистрация меню
    register_nav_menu('top', 'Для шапки');
    register_nav_menu('footer', 'Для подвала');

    add_theme_support( 'post-thumbnails' );  // миниатюры к постам
    add_theme_support( 'title-tag' );  // авто тайтл страниц
});