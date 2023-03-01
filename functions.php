<?php  


/**
 * add theme support
 */

 add_theme_support('post-thumbnails' );
 add_theme_support('menus');


 
/**
 * get style and scripts
 */

function portfolio_enqueue_scripts_and_styles(){
    wp_enqueue_style( 'portfolio_style', get_stylesheet_uri() );
    wp_enqueue_script( 'portfolio_mode', get_template_directory_uri(). '/js/mode.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts_and_styles');



/**
 * register menus
 */

 function portfolio_register_menus(){

    $args=[
        'main_menu' =>  'Huvudmeny',
        'footer_menu'   =>  'Footermeny'
    ];

    register_nav_menus( $args );

 }

 add_action('after_setup_theme', 'portfolio_register_menus');