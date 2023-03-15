<?php
  /**
  *  Fonction pour afficher le menu
  *  @author Allan Boodhun
  *  @link www.allan-boodhun.com
  */

class UnuaPrimaryMenu{
  function __construct(){
      add_action( 'after_setup_theme', array( $this, 'register_unua_menu' ) );
      // add_action( 'unua_header', array( $this, 'displayMenu' ) );
  }
  function register_unua_menu() {
      register_nav_menu( 'primary', __( 'Menu Principal', 'unua' ) );
      $this->displayMenu();
  }
  function unuaNavMenu(){
      wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class'     => 'nav-menu',
          'link_before'    => '<span itemprop="name">',
          'link_after'     => '</span>',
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          // 'walker'         => new My_Custom_Nav_Walker(),
          'fallback_cb'    => false,
          'depth'          => 2,
          'container'      => 'nav',
          'container_class' => 'navbar',
          'container_id'    => 'main-menu',
      ));
  }
  function displayMenu() {
    if (!is_admin()) {
      $menu = new Timber\Menu('primary'); // utilise Timber pour récupérer le menu
      $context['menu'] = $menu;
      Timber::render('views/header.twig', $context); // affiche le menu dans view_header.twig
    }
  }
}
new UnuaPrimaryMenu();