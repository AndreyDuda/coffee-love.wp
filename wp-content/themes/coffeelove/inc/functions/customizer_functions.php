<?php

add_action('customize_register', function($customizer) {
    $customizer->add_section(
        'section_one', array(
            'title' => 'Настройки сайта',
            'description' => '',
            'priority' => 11,
        )
    );
    $customizer->add_setting('phone',
        array('default' => '89215555555')
    );

    $customizer->add_control('phone', array(
            'label' => 'Телефон',
            'section' => 'section_one',
            'type' => 'text',
        )
    );
});