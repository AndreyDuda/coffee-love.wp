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
});