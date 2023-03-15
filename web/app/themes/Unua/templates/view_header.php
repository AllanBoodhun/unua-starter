<?php
  /**
   * Le template du header
   */
?>
<header id="main_menu">
  <div class="burger_mb">
    <div class="burger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="main_menu__content">
    <div class="main_menu__content__logo">
      <a href="<?php echo home_url(); ?>">
        <?= file_get_contents( get_template_directory_uri() . "/src/svg/logo.svg")?>
      </a>
    </div>
    <?= $args['nav_bar']?>
    <div class="socials">
        
    </div>
  </div>
</header>