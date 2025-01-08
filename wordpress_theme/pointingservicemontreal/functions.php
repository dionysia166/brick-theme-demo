<?php 

// Connect CSS and JS files
function pointing_service_files() {
    wp_enqueue_style('pointing_main_styles', get_stylesheet_uri());
    wp_enqueue_script('pointing_main_script', get_template_directory_uri() . '/script.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'pointing_service_files');


// ** THEME SUPPORT STARTS HERE **

// Add theme support
add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('widgets');

// Register menus
function my_menus(){
	register_nav_menus(
		array(
			'header-menu' => __('Header navigation'),
			'footer-menu' => __('Footer nav')
		)
	);
}

add_action('init', 'my_menus');

// Enable featured images for posts
function enable_feat_img(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'enable_feat_img');

// ** CUSTOM POST TYPES STARTS HERE **

function questions_post_type(){
    register_post_type('question', array(
        'supports' => array('title', 'editor', 'custom-fields'),
        'rewrite' => array('slug' => 'questions'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'labels' => array(
            'name' => 'Questions',
            'new_item' => 'New Question',
            'add_new_item' => 'Add New Question',
            'all_items' => 'All Questions',
            'edit_item' => 'Edit Questions',
            'singular_name' => 'Question'
        )
    ));
}

add_action('init', 'questions_post_type');

function services_post_type(){
    register_post_type('service', array(
        'supports' => array('title', 'editor', 'custom-fields'),
        'rewrite' => array('slug' => 'services'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-hammer',
        'labels' => array(
            'name' => 'Services',
            'new_item' => 'New Service',
            'add_new_item' => 'Add New Service',
            'all_items' => 'All Services',
            'edit_item' => 'Edit Services',
            'singular_name' => 'Service'
        )
    ));
}

add_action('init', 'services_post_type');


?>
