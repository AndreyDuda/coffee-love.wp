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
        'title'=> 'dasd',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('phone',
        array('default' => '89215555555')
    );

    $wp_customize->add_control('phone', array(
            'label'   => 'Телефон',
            'section' => 'coffee_love',
            'type'    => 'number',
        )
    );
});