<?php

add_action('customize_register', function($wp_customize) {
    $wp_customize->add_section('coffee_love', array(
            'title'       => '-> Coffee-Love <-',
            'colors'       => 'green',
            'description' => 'Настройки Coffee-Love',
            'priority'    => 11,
        )
    );
/**  */
    $wp_customize->add_panel('Coffee_L', array(
        'type'=>'default',
        'title'=> '',
        'capability' => 'edit_theme_options'
    ));


    $wp_customize->add_setting('sale',
        array('default' => '')
    );

    $wp_customize->add_control('sale', array(
            'label'   => 'Акция',
            'section' => 'coffee_love',
            'type'    => 'text',
        )
    );



	$wp_customize->add_setting('sale_show', array(
		'default' => true,

	));
	$wp_customize->add_control(
		'sale_show',
		array(
			'label'   => 'Акция',
			'section' => 'coffee_love',
			'type'    => 'checkbox',
		)
	);


	$wp_customize->add_setting('preloader_show', array(
		'default' => true,

	));
	$wp_customize->add_control(
		'preloader_show',
		array(
			'label'   => 'Прелордер сайта',
			'section' => 'coffee_love',
			'type'    => 'checkbox',
		)
	);


	$wp_customize->add_setting('cap',
		array('default' => '5425')
	);

	$wp_customize->add_control('cap', array(
			'label'   => 'Выпитых чашек',
			'section' => 'coffee_love',
			'type'    => 'input',
		)
	);



	$wp_customize->add_setting('coffeemachine',
		array('default' => '109')
	);

	$wp_customize->add_control('coffeemachine', array(
			'label'   => 'Установленных кофемашин',
			'section' => 'coffee_love',
			'type'    => 'input',
		)
	);

	$wp_customize->add_setting('joy',
		array('default' => '316')
	);

	$wp_customize->add_control('joy', array(
			'label'   => 'Счастливых покупателей',
			'section' => 'coffee_love',
			'type'    => 'input',
		)
	);

	$wp_customize->add_setting('map-width',
		array('default' => '50')
	);
	$wp_customize->add_control('map-width', array(
			'label'   => 'Ширина карты в %',
			'section' => 'coffee_love',
			'type'    => 'number',
		)
	);

	$wp_customize->add_setting('map-height',
		array('default' => '300')
	);

	$wp_customize->add_control('map-height', array(
			'label'   => 'Высота в карты в px',
			'section' => 'coffee_love',
			'type'    => 'number',
		)
	);

	$wp_customize->add_setting('map_show', array(
		'default' => true,

	));
	$wp_customize->add_control(
		'map_show',
		array(
			'label'   => 'Показать карту',
			'section' => 'coffee_love',
			'type'    => 'checkbox',
		)
	);

    $wp_customize->add_setting('spicial-sale',
        array('default' => 'Аренда без привязки')
    );

    $wp_customize->add_control('spicial-sale', array(
            'label'   => 'Название специального предложения',
            'section' => 'coffee_love',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting('simple-sale',
        array('default' => 'Аренда')
    );

    $wp_customize->add_control('simple-sale', array(
            'label'   => 'Название специального предложения',
            'section' => 'coffee_love',
            'type'    => 'text',
        )
    );



});