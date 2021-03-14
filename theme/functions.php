<?php

//Making jQuery to load from Google Library
function replace_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery');


function iasf_get_scripts_styles() {
    // wp_enqueue_script( 'jquery2', 'https://code.jquery.com/jquery-3.2.1.min.js', array( 'jquery' ));
   
    // wp_enqueue_style('bs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    
wp_enqueue_style( 'style-main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
     wp_enqueue_style('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    
    //wp_enqueue_style( 'script-jquery-1', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script( 'script-jquery-dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js', array( 'jquery' ));
    wp_enqueue_script( 'script-jquery-scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array( 'jquery' ));
    wp_enqueue_script( 'script-jquery-onvisible', get_template_directory_uri() . '/assets/js/jquery.onvisible.min.js', array( 'jquery' ));
    wp_enqueue_script( 'script-skel', get_template_directory_uri() . '/assets/js/skel.min.js', array( 'jquery' ));
    wp_enqueue_script( 'script-util', get_template_directory_uri() . '/assets/js/util.js', array( 'jquery' ));
    wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'iasf_get_scripts_styles' );

add_theme_support( 'post-thumbnails' ); 

function fb_move_admin_bar() {
    echo '
    <style type="text/css">
    body { 
    margin-top: -28px;
    padding-bottom: 28px;
    }
    body.admin-bar #wphead {
       padding-top: 0;
    }
    body.admin-bar #footer {
       padding-bottom: 28px;
    }
    #wpadminbar {
        top: auto !important;
        bottom: 0;
    }
    #wpadminbar .quicklinks .menupop ul {
        bottom: 28px;
    }
    </style>';
}
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );

// disable <p> tags being added:
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );