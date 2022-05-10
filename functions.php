<?php

// Load Styles and Bootstrap 

function register_resources() {

    wp_enqueue_style("bootstrap",get_stylesheet_directory_uri() .  "/assets/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style("Projects-Clean", get_stylesheet_directory_uri() . "/assets/css/Projects-Clean.css"); 
    wp_enqueue_style("Team-Boxed", get_stylesheet_directory_uri() . "/assets/css/Team-Boxed.css"); 
    wp_enqueue_style("Team-Grid", get_stylesheet_directory_uri() . "/assets/css/Team-Grid.css"); 
    wp_enqueue_style("additional", get_stylesheet_directory_uri() . "/assets/css/additional.css"); 
    wp_enqueue_style("Footer-Basic", get_stylesheet_directory_uri() . "/assets/css/Footer-Basic.css"); 


}
add_action("wp_enqueue_scripts", "register_resources");




//Load Scripts 

function addJs() 
{

    // wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js");
    wp_enqueue_script("bs-init",get_template_directory_uri() . "/assets/js/bs-init.js");
    wp_enqueue_script( 'bootstrap',get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js' );
    wp_enqueue_script("base",get_template_directory_uri() .  "/assets/js/base.js");


}

add_action("wp_enqueue_scripts", "addJs");

//Add menu support
add_theme_support("menus")

?>





<?php
// Register Custom Navigation Walker

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//Register nav menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


// Add option 'footer' to wp admin 

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Logo');
	acf_add_options_page('Footer');
}

// Returns Year

function currentYear(){
     return date('Y');
}

?>









