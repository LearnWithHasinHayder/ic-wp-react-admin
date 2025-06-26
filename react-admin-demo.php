<?php
/**
 * Plugin Name: React Admin Demo
 * Version; 1.0
 * Author: You!
 * Description: How to integrate react inside wp admin
 */

add_action('admin_menu', function () {
    add_menu_page(
        'Vite React App',
        'Vite React',
        'manage_options',
        'vite-react-admin',
        'vite_react_admin_render',
        'dashicons-admin-site-alt3',
        20
    );
});

add_action('admin_enqueue_scripts', 'vite_react_admin_script');
function vite_react_admin_script($hook) {
    if ($hook !== 'toplevel_page_vite-react-admin') {
        return;
    }

    wp_enqueue_script('vite-react-admin-js',
        plugin_dir_url(__FILE__) . 'index-CauoZ3BH.js',
        [],
        time(),
        true
    );

    wp_enqueue_style('vite-react-admin-css',
        plugin_dir_url(__FILE__) . 'index-mOncF05j.css',
        [],
        '1.0'
    );

    // wp_enqueue_script_module(
    //     'vite-react-admin-js',
    //     'http://localhost:5173/src/main.js',
    //     [],
    //     time()
    // );

    // wp_localize_script('vite-react-admin-js', 'reactdemo', [
    //     'name' => "Awesome Contact Manager"
    // ]);
}

function vite_react_admin_render() {
    echo "<div class='wrap'><div id='root'></div></div>";
}