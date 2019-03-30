<?php
include "inc/Custom_Walker_Nav_Menu.php";

function get_navigation() {
	$templates = array();
	$templates[] = 'navigation.php';

	locate_template($templates, true);
}

function shop_styles_scripts() {
	wp_enqueue_style('shop-bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('shop-component', get_template_directory_uri() . '/assets/css/component.css');
	wp_enqueue_style('shop-flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');
	wp_enqueue_style('shop-style-old', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('shop-style-new', get_template_directory_uri() . '/style.css');

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');

	/*wp_enqueue_script('jquery');*/

	wp_enqueue_script('shop-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js');
	wp_enqueue_script('shop-responsiveslides', get_template_directory_uri() . '/assets/js/responsiveslides.min.js');
	wp_enqueue_script('shop-simpleCart', get_template_directory_uri() . '/assets/js/simpleCart.min.js');
	wp_enqueue_script('shop-flexisel-js', get_template_directory_uri() . '/assets/js/jquery.flexisel.js');


	add_action('wp_footer', function (){

		/*wp_enqueue_script('shop-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js');
		wp_enqueue_script('shop-simpleCart', get_template_directory_uri() . '/assets/js/simpleCart.min.js');*/

	});
}

add_action('wp_enqueue_scripts', 'shop_styles_scripts');
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

function my_options() {
	add_settings_field('url_slide', 'Ссылка слайдера', 'display_url', 'general');
	register_setting('general', 'url_slide');

	add_settings_field('button_slide', 'Заголовок кнопки слайдера', 'display_button', 'general');
	register_setting('general', 'button_slide');

	add_settings_field('my_phone', 'Телефон', 'display_phone', 'discussion');
	register_setting('discussion', 'my_phone');
}

function display_url() {
	echo '<input type="text" class="regular-text" name="url_slide" value="' . esc_attr__(get_option('url_slide')) . '">';
}

function display_button() {
	echo '<input type="text" class="regular-text" name="button_slide" value="' . esc_attr__(get_option('button_slide')) . '">';
}

function display_phone() {
	echo '<input type="text" class="regular-text" name="my_phone" value="' . esc_attr__(get_option('my_phone')) . '">';
}

add_action('admin_menu', 'my_options');

function banner_index() {
	register_post_type('slider', array(
		'public'        => true,
		'supports'      => array('title', 'editor', 'thumbnail'),
		'menu_position' => 120,
		'menu_icon'     => admin_url().'images/media-button-other.gif',
		'labels'        => array(
			'name'         => 'Слайдер',
			'all_items'    => 'Все слайды',
			'add_new'      => 'Добавить новый слайд',
			'add_new_item' => 'Новый слайд'
		)
	));
}
add_action('init', 'banner_index');


register_nav_menus(array(
	'top'    => 'Верхнее меню',
	'bottom' => 'Меню футера'
));
