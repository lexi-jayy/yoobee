<?php

require get_template_directory() . '/inc/function-admin.php';


function add_custom_files() {
    wp_enqueue_style('my_bootstrap_file', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '4.3.1');

    wp_enqueue_style('my_custom_css_stylesheet', get_template_directory_uri() . '/assets/css/custom_theme_style.css', array(), '0.1');

    wp_enqueue_script('my_bootstrap_script_file', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '4.3.1', true);
};

add_action('wp_enqueue_scripts', 'add_custom_files');

function register_my_menu() {
    register_nav_menu('header_menu', 'this is the menu that appears at the top of the page');
    register_nav_menu('footer_menu', 'this is the menu that appears at the bottom of the page');
}

add_action( 'init', 'register_my_menu' );

require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';

add_theme_support('wp-block-styles');

add_theme_support('post-thumbnails');

$args = array(
	'width'         => 980,
	'height'        => 60,
	'default-image' => get_template_directory_uri() . '/assets/img/makeup-design-programme.jpg',
	'uploads'       => true,
);

add_theme_support( 'custom-header', $args );

add_image_size('icon', 50, 50, true);

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
  }
  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
  
  add_theme_support( 'post-formats', array( 'image', 'video', 'audio' ) );

function add_sidebar() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', '18wdwu07Panda' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', '18wdwu07Panda' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h2 class="widgettitle">',
    	'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'add_sidebar' );