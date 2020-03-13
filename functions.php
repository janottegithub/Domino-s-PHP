<?php 

function website_files(){
    wp_enqueue_style('all_styles', get_theme_file_uri('/css/all.css'));
    wp_enqueue_style('bootstrap_styles', get_theme_file_uri('/css/bootstrap.min.css'));

    wp_enqueue_style('all_styles', get_stylesheet_uri());
    wp_enqueue_style('my_main_styles', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'website_files');

function website_scripts(){
    wp_enqueue_script( 'app.js', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap.bundle.min.js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'isotope.js', get_template_directory_uri() . '/js/isotope.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery-3.3.1.min.js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'website_scripts');
