<?php

/*
Plugin Name: PL Admin
Plugin URI: http://projectlogin.net
Description: Admin Theme for ProjectLogin.net - Upload and Activate.
Author: Jay Collier
Version: 1.0
Author URI: http://projectlogin.net
*/

function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

?>