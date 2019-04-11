<?php

include_once (__DIR__ . '/inc/functions/admin_functions.php');
include_once (__DIR__ . '/inc/functions/customizer_functions.php');
include_once (__DIR__ . '/inc/Menu/Custom_Walker_Nav_Menu.php');

function get_navigation() {
	$templates = array();
	$templates[] = 'navigation.php';

	locate_template($templates, true);
}
add_action('wp_head', function () {
	$vars = array(
		'ajax_url' => admin_url('admin-ajax.php')
	);

	echo "<script>window.wp = " . json_encode($vars) . "</script>";
});

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
    wp_enqueue_style('item_css', get_template_directory_uri() . '/assets/css/item.css');

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
	add_theme_support( 'title-tag' );
    register_nav_menu('coffee', 'Для ссылки кофе');
    register_nav_menu('coffeemachine', 'Для ссылки кофе машины');

    add_theme_support( 'post-thumbnails' );  // миниатюры к постам
    add_theme_support( 'title-tag' );  // авто тайтл страниц
});

function prefix_pre_get_posts($query) {
	if ($query->is_category) {
		$query->set('post_type', array(
			'coffee',
			'coffee_machine'
		));
	}
	return $query;
}

add_action('pre_get_posts', 'prefix_pre_get_posts');


add_action('wp_ajax_sendmail', 'ajax_send_mail');
add_action('wp_ajax_nopriv_sendmail', 'ajax_send_mail');

function ajax_send_mail() {

	$to = "sales@coffee-love.com.ua";
	$subject = "New Order";

	$name = isset($_POST['name'])? $_POST['name']:'';
	$phone = isset($_POST['phone'])? $_POST['phone']:'';
	$order_id = isset($_POST['order_id'])? $_POST['order_id']:'';
	$order_type = isset($_POST['order_type'])? $_POST['order_type']:'';
	$order_title = isset($_POST['order_title'])? $_POST['order_title']:'';

	$message = '<table>
					<tbody>
						<tr>
							<td><b>Имя</b>:</td><td>'. $name .'</td>
						</tr>
						<tr>
							<td><b>Телефон</b>:</td><td>'. $phone .'</td>
						</tr>
						<tr>
							<td><b>Тип</b>:</td><td>'. $order_type .'</td>
						</tr>
						<tr>
							<td><b>id продукта</b>:</td><td>'. $order_id .'</td>
						</tr>
						<tr>
							<td><b>Название продукта</b>:</td><td>'. $order_title .'</td>
						</tr>
					</tbody>
				</table>';

	$header = "From:sales@coffee-love.com.ua \r\n";
	/*$header .= "Cc:coffee-love@coffee-love.com.ua \r\n";*/
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset='utf-8';\r\n";

	$retval = mail ($to,$subject,$message,$header);

	if( $retval == true ) {
		echo "Message sent successfully...";
	}else {
		echo "Message could not be sent...";
	}

wp_die();
}