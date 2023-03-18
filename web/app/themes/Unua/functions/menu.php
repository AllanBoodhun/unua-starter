<?php
  /**
  *  Fonction pour afficher le menu
  *  @author Allan Boodhun
  *  @link www.allan-boodhun.com
  */

  class UnuaPrimaryMenu {
    function __construct() {
      add_action('after_setup_theme', array($this, 'register_unua_menu'));
      // add_filter('nav_menu_css_class', array($this, 'add_current_class_to_nav_item', 10, 2));
    }
  
    function register_unua_menu() {
      register_nav_menu('primary', __('Menu Principal', 'unua'));
    }
  
    function unuaNavMenu() {
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'nav-menu',
        'link_before' => '<span itemprop="name">',
        'link_after' => '</span>',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'fallback_cb' => false,
        'depth' => 2,
        'container' => 'nav',
        'container_class' => 'navbar',
        'container_id' => 'main-menu',
      ));
    }
  //   function add_current_class_to_nav_item($classes, $item) {
  //     if (in_array('current-menu-item', $classes)) {
  //         $classes[] = 'current-item';
  //     }
  //     return $classes;
  //  }
  }
  
  new UnuaPrimaryMenu();
  
