<?php



// Подключение стилей и скриптов
function mytheme_enqueue_styles() {
    // Подключение стилей
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/Main.css');

    // Подключение скриптов
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/JavaScript.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Регистрация меню
function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'mytheme'),
            'footer-menu'  => __('Footer Menu', 'mytheme')
        )
    );
}
add_action('init', 'mytheme_register_menus');

// Добавление поддержки различных функций
function mytheme_setup() {
    // Поддержка заголовков
    add_theme_support('title-tag');

    // Поддержка миниатюр записей
    add_theme_support('post-thumbnails');

    // Поддержка HTML5
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Поддержка кастомных логотипов
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

// Добавление кастомных виджетов
function mytheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'mytheme'),
        'id'            => 'main-sidebar',
        'description'   => __('Add widgets here to appear in your sidebar.', 'mytheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');

// Добавление кастомных функций
function mytheme_custom_function() {
    // Ваш кастомный код здесь
}
add_action('wp', 'mytheme_custom_function');
