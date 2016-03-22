<?php

function cwk_theme_styles() {

	wp_enqueue_style('foundation_css', get_template_directory_uri() . '/css/foundation.css');
	wp_enqueue_style('font_css', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/css/style.css');

}

add_action('wp_enqueue_scripts', 'cwk_theme_styles');

function cwk_theme_js() {

	//(name, function, . path to file, array of dependents, specific version, boolean: appear at foot of page?)
	wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
	wp_enqueue_script('foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true);
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true);
}

//Tells WP: When you enqueue scripts, hook on our function above
add_action('wp_enqueue_scripts', 'cwk_theme_js');

?>