<?php

function iasf_get_scripts_styles() {
    wp_enqueue_style( 'style-main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    //wp_enqueue_style( 'script-jquery-1', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script( 'script-jquery-dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js', array( 'jquery' ));
    wp_enqueue_script( 'script-jquery-scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array( 'jquery' ));
    wp_enqueue_script( 'script-jquery-onvisible', get_template_directory_uri() . '/assets/js/jquery.onvisible.min.js', array( 'jquery' ));
    wp_enqueue_script( 'script-skel', get_template_directory_uri() . '/assets/js/skel.min.js', array( 'jquery' ));
    wp_enqueue_script( 'script-util', get_template_directory_uri() . '/assets/js/util.js', array( 'jquery' ));
    wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'iasf_get_scripts_styles' );