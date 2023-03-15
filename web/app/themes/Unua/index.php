<?php 

$context = \Timber\Timber::get_context();
$context['posts'] = \Timber\Timber::query_posts();

\Timber\Timber::render( 'views/index.twig', $context );