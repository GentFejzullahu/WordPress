<?php
function load_scripts() {
    wp_enqueue_style(
        'style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );

    wp_enqueue_script(
        'dropdown',
        get_template_directory_uri() . '/js/dropdown.js',
        array(),
        '1.0',
        false
    );
}
add_action('wp_enqueue_scripts', 'load_scripts');


function config() {
    register_nav_menus(
        array(
            'wp_admin_main_menu'  => 'Main Menu',
            'wp_admin_footer_menu' => 'Footer Menu',
        )
    );

    $args = array(
        'height' => 255,
        'width' => 110,
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 110,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ));
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'config', 0);

function wp_devs_sidebars() {
    register_sidebar(
        array(
            'name'          => 'Blog Sidebar',
            'id'            => 'sidebar-blog',
            'description'   => 'This is the blog sidebar. You can add widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
}
add_action('widgets_init', 'wp_devs_sidebars');

register_sidebar(
    array(
        'name'          => 'Service 1',
        'id'            => 'services-1',
        'description'   => 'First Service Area',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-wrapper">',
        'after_title'   => '</h4>',
    )
);


register_sidebar(
    array(
        'name'          => 'Service 2',
        'id'            => 'services-2',
        'description'   => 'second Service Area',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-wrapper">',
        'after_title'   => '</h4>',
    )
);

register_sidebar(
    array(
        'name'          => 'Service 3',
        'id'            => 'services-3',
        'description'   => 'third Service Area',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-wrapper">',
        'after_title'   => '</h4>',
    )
);

add_action('widgets_init','wp_devs_sidebars');
?>