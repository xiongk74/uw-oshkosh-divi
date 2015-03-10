<?php

// Stylesheets
function uwo_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
add_action( 'wp_enqueue_scripts', 'uwo_theme_enqueue_styles' );

// Favicons
function uwo_favicon_link() {
    echo '<!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/img/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="' . get_stylesheet_directory_uri() . '/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="' . get_stylesheet_directory_uri() . '/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="' . get_stylesheet_directory_uri() . '/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="' . get_stylesheet_directory_uri() . '/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="' . get_stylesheet_directory_uri() . '/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="' . get_stylesheet_directory_uri() . '/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="' . get_stylesheet_directory_uri() . '/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="' . get_stylesheet_directory_uri() . '/img/favicons/apple-touch-icon-152x152.png">
    <meta name="apple-mobile-web-app-title" content="UW Oshkosh">
    <link rel="icon" type="image/png" href="' . get_stylesheet_directory_uri() . '/img/favicons/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="' . get_stylesheet_directory_uri() . '/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="' . get_stylesheet_directory_uri() . '/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="' . get_stylesheet_directory_uri() . '/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="' . get_stylesheet_directory_uri() . '/img/favicons/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-TileImage" content="' . get_stylesheet_directory_uri() . '/img/favicons/mstile-144x144.png">
    <meta name="application-name" content="UW Oshkosh">';
}
add_action( 'wp_head', 'uwo_favicon_link' );

?>
