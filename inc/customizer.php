<?php

function wpdevs_costumizer($wp_customize){
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright settings ',
        )
    );
    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright x - All Rights Reserved',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
   $wp_customize->add_control(
    'set_copyright',
    array(
        'label' => 'Copyright info',
        'description' => 'Please enter your copyright',
        'section' => 'sec_copyright',
        'type' => 'text',
       )
    );
}
add_action('customize_register','wpdevs_costumizer');
?>