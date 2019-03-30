<?php

require_once __DIR__ . '/Test_Menu.php';

function test_scripts() {
	wp_enqueue_style('test-bootstrapcss', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('test-style', get_template_directory_uri() . '/style.css');

	add_action('wp_footer', function (){
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');

		/*wp_enqueue_script('jquery');*/
		wp_enqueue_script('test-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'));
		wp_enqueue_script('test-bootstrapjs', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');

	});
}

add_action('wp_enqueue_scripts', 'test_scripts');

function test_setup() {
	add_theme_support('custom-logo', array(
		'width'  => 150,
		'height' => 40
	));
	add_theme_support('custom-background', array(
		'default-color' => 'ffffff',
		'default-image' => get_template_directory_uri() . '/assets/image/pipes.png',
	));
	add_theme_support('custom-header', array(
		'default-image' => get_template_directory_uri() . '/assets/image/pipes.png',
		'width'  => 2000,
		'height' => 1300
	));


	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('mini-thumbnails', 100, 100, true);
	register_nav_menus(array(
		'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в футере'
	));
}

add_action('after_setup_theme', 'test_setup');

function my_navigation_template() {
	return '
	<nav class="navigation" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>';
}

add_filter('navigation_markup_template', 'my_navigation_template');

function test_widget_init() {
	register_sidebar(array(
		'name'        => 'Сайдбар справа',
		'id'          => 'right-sidebar',
		'description' => 'Область для виджетов в сайдбаре справа'
	));
}

add_action('widgets_init', 'test_widget_init');

// Customizer
function test_customize_register($wp_customize){
	$wp_customize->add_setting('test_link_color', array(
		'default'           => '#007bff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'test_link_color',
			array(
				'label'   => 'Цвет ссылок',
				'section' => 'colors',
				'setting' => 'test_link_color',
			)
		)
	);

	// custom section
	$wp_customize->add_section('test_site_data', array(
		'title' => 'Информация сайта',
		'priority' => 10,
	));
	$wp_customize->add_setting('test_phone', array(
		'default' => '',
		'transport'=>'postMessage',
	));
	$wp_customize->add_control(
		'test_phone',
		array(
			'label' => 'Телефон',
			'section' => 'test_site_data',
			'type' => 'text',
		)
	);

	$wp_customize->add_setting('test_show_phone', array(
		'default' => true,
		'transport'=>'postMessage',
	));
	$wp_customize->add_control(
		'test_show_phone',
		array(
			'label' => 'Показывать телефон',
			'section' => 'test_site_data',
			'type' => 'checkbox',
		)
	);
}
add_action('customize_register', 'test_customize_register');

function test_customize_css(){
$color = get_theme_mod('test_link_color');

$link = '<style type="text/css">
    		a { color: ' . $color . ' }
		 </style>';

echo $link;
}
add_action('wp_head', 'test_customize_css');

add_action('customize_preview_init', function () {
	wp_enqueue_script('test-customizejs', get_template_directory_uri() . '/assets/js/test-customize.js', array('jquery', 'customize-preview'), '', true);
});