<?php

function nedodjija_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');


}
add_action('after_setup_theme', 'nedodjija_theme_support');


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Nedodjija' ),
    ) );
}
add_action( 'after_setup_theme', 'register_navwalker' );

function my_excerpt_length($length){
    return 15;
    }
    add_filter('excerpt_length', 'my_excerpt_length');

function nedodjija_theme_styles() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css');
    wp_enqueue_style('animate-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'nedodjija_theme_styles');

function nedodjija_theme_js() {
    wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
    wp_enqueue_script('jquery-cdn', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'nedodjija_theme_js');

function widgeti(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'=> 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title'=>'</h3>',
    ));

    register_sidebar(array(
        'name' => 'Rezervacija',
        'id'=> 'rezervacija',
        'before_widget' => ' <article class="container">',
        'after_widget' => '</article>',
        'before_title' => '<h2>',
        'after_title'=>'</h2>',
    ));

    register_sidebar(array(
        'name' => 'Mapa',
        'id'=> 'mapa',
        'before_widget' => ' <section class="map">',
        'after_widget' => '</section>',
       
    ));

    
    register_sidebar(array(
        'name' => 'Footer 1',
        'id'=> 'footer-1',
        'before_widget' => ' <div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title'=>'</h3>',
    ));

    register_sidebar(array(
        'name' => 'Footer 2',
        'id'=> 'footer-2',
        'before_widget' => ' <div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title'=>'</h3>',
    ));

    register_sidebar(array(
        'name' => 'Footer 3',
        'id'=> 'footer-3',
        'before_widget' => ' <div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title'=>'</h3>',
    ));

    register_sidebar(array(
        'name' => 'Bottom bar',
        'id'=> 'bottom-bar',
        'before_widget' => '  <section class="bottomBar">>',
        'after_widget' => '</section>',
       
    ));
}
add_action('widgets_init', 'widgeti');