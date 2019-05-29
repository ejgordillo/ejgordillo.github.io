<nav class="nav__principal navbar navbar-expand-lg">
  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="APCIC">
    <figure class="logo">
      <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo-letras.gif ?>" alt="IPCIC">
    </figure>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <?php wp_nav_menu( array(
      'theme_location' => 'header-one-menu',
      'container' => 'ul',
      'menu_class' => 'navbar-nav full-width',
      'add_li_class'  => 'nav-item'
    )); ?>
  </div>
</nav>