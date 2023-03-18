<?php 
$context = Timber::get_context();
// récupère tous les articles (post) triés par date de publication décroissante
$context['posts'] = Timber::get_posts();
$menu = new Timber\Menu('primary'); // utilise Timber pour récupérer le menu
$context['menu'] = $menu;
$context['logo'] = get_template_directory_uri() . "/src/svg/logo.svg";
// rendu du template 'views/index.twig' avec le contexte actuel
Timber::render( 'views/index.twig', $context );