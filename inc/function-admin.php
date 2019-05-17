<?php


/*
==============
ADMIN PAGE
==============
*/

function yoobee_add_admin_page(){
    add_menu_page('Yoobee Options', 'Yoobee', 'manage_options', 'Yoobee_page', 'yoobee_create_page');

    add_submenu_page('Yoobee_page', 'Yoobee Theme Options', 'General', 'manage_options', 'Yoobee_page', 'yoobee_create_page');
    add_submenu_page('Yoobee_page', 'Yoobee CSS Options', 'Custom CSS', 'manage_options', 'Yoobee_page_css', 'yoobee_theme_settings_page');

    add_action('admin_init', 'yoobee_custom_settings');
}

add_action('admin_init', 'yoobee_add_admin_page');

function yoobee_custom_settings(){
    register_setting('yoobee-settings-group', 'first_name');
    add_settings_section('yoobee-sidebar-options', 'Sidebar Options', 'Yoobee_sidebar_options', 'Yoobee_page');

    add_settings_field('sidebar-name', 'First Name', 'yoobee_sidebar_name', 'Yoobee_page', 'yoobee-sidebar-options');
}

function Yoobee_sidebar_options(){
    echo 'customize your sidebar information';
}

function yoobee_sidebar_name(){
    echo '<input type="text" name="first-name" value="" placeholder="First Name"/>';
}

function yoobee_create_page(){
    require_once(get_template_directory() . '/inc/templates/yoobee-admin.php');
}

function yoobee_theme_settings_page(){
    echo '<h1> Pokemon Custom CSS Options </h1>';
}