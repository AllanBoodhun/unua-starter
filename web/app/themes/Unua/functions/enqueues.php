<?php

add_action( 'wp_enqueue_scripts', 'UnuaStyles', 25 );
function UnuaStyles() {
// Styles du thème
	wp_register_style('UnuaStyle', get_stylesheet_directory_uri().'/assets/main.css', array(), false, 'all');
	wp_enqueue_style('UnuaStyle');
}


add_action('wp_enqueue_scripts', 'UnuaScripts');
function UnuaScripts() {
    // Ajoute votre script à la file d'attente des scripts de WordPress
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/main.min.js', array(), null, true);
    // Ajoute l'attribut defer à votre script
    wp_script_add_data('script', 'defer', true);
}
