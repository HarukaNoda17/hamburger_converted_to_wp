<?php
// ファイルの読み込み
function add_files()
{
    // リセットcss
    wp_enqueue_style('reset-style', get_theme_file_uri('/css/reset.css'));

    // google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap');

    // FontAwesome
    wp_enqueue_script('fontawesome_script', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

    // style css
    wp_enqueue_style('style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

    // Javascript
    wp_enqueue_script('main-script', get_theme_file_uri() . '/js/script.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'add_files');

// タイトル出力
function theme_setup()
{
    // テーマサポート
    add_theme_support('title-tag');
    add_theme_support('menus');
}
add_action('after_setup_theme', 'theme_setup');
