<?php
function load_scripts() {
   wp_enqueue_style(
    'style',
     get_stylesheet_uri(),
     array(),
     filemtime(get_template_directory() . '/style.css'),'all'
    );
    
     wp_enqueue_script('drowdown'_template_directoru().'/js/dropdown.js',array(),'1.0',false)

}
add_action('wp_enqueue_scripts', 'load_scripts');


function config() {
    register_nav_menus(
        array(
            'wp_admin_main_menu'='main menu',
            'wp_admin_footer_menu'='footer menu',

        )
        );
        $args=array(
            'height=>'255,
            'width'=>110,
        )
        add_theme_support('costum-header',$args);
        add_theme_support('post_thumbnails');
        add_theme_support('custom-logo',array(
            'height' =>110,
            'width' =>200,
            'flex-width' =>true,
            'flex-height' =>true
        ));
        add_theme_support('automatic-feed-links')
        add_theme_support('html5',array('comment-list','comment-from','search-form','gallery','caption','style','script'));
        add_theme_support('title-tag');   
    
    }

add_action('after_setup_theme','config',0);



?>