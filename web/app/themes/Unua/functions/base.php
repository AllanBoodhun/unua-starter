<?php
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Configurer timber
$timber = new \Timber\Timber ();
\Timber\Timber::$autoescape = true;
\Timber\Timber::$dirname = array( 'templates', 'views' );