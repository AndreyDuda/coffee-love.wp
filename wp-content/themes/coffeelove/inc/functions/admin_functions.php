<?php

add_action('admin_menu', function (){
    add_menu_page(
        'Coffee',
        'Coffee-Love',
        'edit_others_posts',
        'coffee-love',
        function (){},
        get_template_directory_uri() . '/assets/image/favicon.ico' ,
        3);


});
add_filter( 'option_page_capability_'.'my_page_slug', 'my_page_capability' );

function my_page_capability( $capability ) {
    return 'edit_others_posts';
}

add_action('init', function() {

    register_post_type('coffee', [
            'labels' => [
                'name'               => 'Кофе', // основное название для типа записи
                'singular_name'      => 'Кофе', // название для одной записи этого типа
                'add_new'            => 'Добавить новый', // для добавления новой записи
                'add_new_item'       => 'Добавление кофе', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Редактирование кофе', // для редактирования типа записи
                'new_item'           => 'Новый кофе', // текст новой записи
                'view_item'          => 'Смотреть кофе', // для просмотра записи этого типа.
                'search_items'       => 'Искать кофе', // для поиска по этим типам записи
                'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => 'Кофе', // название меню
            ],
            'public'              => true,
            'show_in_menu'        => 'coffee-love',
            'menu_position'       => 4,
            'menu_icon'           => 'dashicons-format-quote',
            'hierarchical'        => false,
            'supports'            => array('title', 'editor', 'thumbnail'),
            'show_in_nav_menus'   => true,
            'taxonomies'          => array( 'category' )
    ]);

    register_post_type('coffee_machine', [
        'labels' => [
            'name'               => 'Кофемашины', // основное название для типа записи
            'singular_name'      => 'Кофемашина', // название для одной записи этого типа
            'add_new'            => 'Добавить новую', // для добавления новой записи
            'add_new_item'       => 'Добавление кофемашины', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование кофемашину', // для редактирования типа записи
            'new_item'           => 'Новая кофемашина', // текст новой записи
            'view_item'          => 'Смотреть кофемашину', // для просмотра записи этого типа.
            'search_items'       => 'Искать кофемашину', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Кофемашины', // название меню
        ],
        'public'              => true,
        'show_in_menu'        => 'coffee-love',
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-format-quote',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'thumbnail'),
        'show_in_nav_menus'   => true,
        'taxonomies'          => array( 'category' )
    ]);

	register_post_type('order_coffee_love', [
		'labels' => [
			'name'               => 'Заказы', // основное название для типа записи
			'singular_name'      => 'Заказы', // название для одной записи этого типа
			'view_item'          => 'Смотреть заказ', // для просмотра записи этого типа.
			'search_items'       => 'Искать заказ', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Заказы', // название меню
		],
		'public'              => true,
		'show_in_menu'        => 'coffee-love',
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-format-quote',
		'hierarchical'        => false,
		'supports'            => array('title', 'editor'),
		'show_in_nav_menus'   => true,


	]);

    register_taxonomy('coffee-type', array('coffee'), array(
        'labels'                => array(
            'name'              => 'Тип кофе',
            'singular_name'     => 'Тип кофе',
            'search_items'      => 'Найти тип кофе',
            'all_items'         => 'Все типы кофе',
            'view_item '        => 'Посмотреть тип кофе',
            'edit_item'         => 'Редактировать тип кофе',
            'update_item'       => 'Обновить тип кофе',
            'add_new_item'      => 'Добавить новый тип кофе',
            'new_item_name'     => 'Добавить новый',
            'menu_name'         => 'Типы кофе',
        ),
        'description'           => '', // описание таксономии
        'public'                => true,
        'show_in_menu'          => 'coffee-love',
        'hierarchical'          => false

    ));

    /*register_taxonomy('country_m', array('coffee_machine'), array(
        'labels'                => array(
            'name'              => 'Страна',
            'singular_name'     => 'Страна',
            'search_items'      => 'Найти страна',
            'all_items'         => 'Все страныЫ',
            'view_item '        => 'Посмотреть страна',
            'edit_item'         => 'Редактировать страна',
            'update_item'       => 'Обновить страна',
            'add_new_item'      => 'Добавить новый страна',
            'new_item_name'     => 'Добавить новый',
            'menu_name'         => 'Типы кофе',
        ),
        'description'           => '', // описание таксономии
        'public'                => true,
        'show_in_menu'          => 'coffee-love',
        'hierarchical'          => false,
        'rewrite'               => false,
        'query'                 => array(
            ''
        )
    ));*/

	/*register_taxonomy('country', array('coffee'), array(
		'labels'                => array(
			'name'              => 'Страна',
			'singular_name'     => 'Страна',
			'search_items'      => 'Найти страна',
			'all_items'         => 'Все страныЫ',
			'view_item '        => 'Посмотреть страна',
			'edit_item'         => 'Редактировать страна',
			'update_item'       => 'Обновить страна',
			'add_new_item'      => 'Добавить новый страна',
			'new_item_name'     => 'Добавить новый',
			'menu_name'         => 'Типы кофе',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'show_in_menu'          => 'coffee-love',
		'hierarchical'          => false,
		'rewrite'               => false,
		'query'                 => array(
			''
		)
	));*/


});


function remove_menus(){
	//remove_menu_page( 'index.php/dashboard' );                  //Консоль
	remove_menu_page( 'edit.php' );

	remove_menu_page( 'edit.php?post_type=page' );    //Страницы
	//remove_menu_page( 'nav-menus.php' );

	remove_menu_page( 'edit-comments.php' );          //Комментарии
	//remove_menu_page( 'users.php' );                  //Пользователи
	//remove_menu_page( 'tools.php' );                  //Инструменты
 	//remove_menu_page( 'options-general.php' );         //Настройки

}
add_action( 'admin_menu', 'remove_menus' );







