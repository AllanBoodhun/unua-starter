<?php

add_action( 'wp_enqueue_scripts', 'UnuaStyles', 25 );
function UnuaStyles() {
// Styles du thème
	wp_register_style('UnuaStyle', get_stylesheet_directory_uri().'/assets/main.css', array(), false, 'all');
	wp_enqueue_style('UnuaStyle');
}

add_action( 'wp_enqueue_scripts', 'UnuaScripts', 25 );
function UnuaScripts() {
// Script du thème
    wp_enqueue_script("script", get_template_directory_uri() . "/assets/main.min.js", [], false);
}

