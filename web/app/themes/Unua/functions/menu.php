<?php
  /**
  *  Fonction pour afficher le menu
  *  @author Allan Boodhun
  *  @link www.allan-boodhun.com
  */
// test
class UnuaPrimaryMenu{
  function __construct(){
      add_action( 'after_setup_theme', array( $this, 'register_unua_menu' ) );
      add_action('unua_header', array( $this, 'displayMenu' ) );
  }
  function register_unua_menu() {
      register_nav_menu( 'primary', __( 'Menu Principal', 'unua' ) );
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
  function displayMenu(){
      ob_start();
      $this->unuaNavMenu();
      $nav_bar = ob_get_clean();
      // On affiche le menu
      echo get_template_part('templates/view_header', null, array('nav_bar' => $nav_bar));
  }
}
new UnuaPrimaryMenu();