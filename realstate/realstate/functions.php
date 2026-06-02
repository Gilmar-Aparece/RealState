<?php

// Pre-load CSS and styles
function main_theme_function(){
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main_styles', get_stylesheet_uri());
    wp_enqueue_style('main_responsive_styles', get_template_directory_uri().'/responsive.css');
}
add_action('wp_enqueue_scripts', 'main_theme_function');

add_filter('show_admin_bar', '__return_false');


function real_estate_lawyer_setup() {
    register_nav_menus( array(
        'primary' => __( 'Main Menu', 'realestate' ),
    ) );
}
add_action( 'after_setup_theme', 'real_estate_lawyer_setup' );

function register_lawyer_contacts_cpt() {
    $args = array(
        'label'               => 'Contacts',
        'public'              => true,
        'show_in_rest'        => true, // Enables Gutenberg
        'menu_icon'           => 'dashicons-businessperson',
        'supports'            => array('title', 'thumbnail'),
        'has_archive'         => true,
    );
    register_post_type('contact', $args);
}
add_action('init', 'register_lawyer_contacts_cpt');
