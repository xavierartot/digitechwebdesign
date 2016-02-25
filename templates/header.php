<div class='hero'>
  <div class='overlay'></div>
  <header class="banner navbar navbar-default navbar-static-top " role="banner">
    <div class="">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?>
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="logo"/>
        </a>
      </div>

      <nav class="collapse navbar-collapse pull-right" role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </nav>
    </div>
  </header>

  <div class='container-hero'>

    <div class='hero-text'>

      <img src='<?php echo get_template_directory_uri(); ?>/dist/images/Tree.png' alt='tree image' />
      <div class='border'>
      </div>
      <div class='align-left'>
        <p>
          <span>rethink.</span>
          Enjoy your family at Five Mile Dam Park
        </p>
      </div>
    </div>

    <a href='' class='learn-more'>Learn more</a>
    <!--<i class='fa fa-arrow-right'></i>-->

    <div class='scroll'>
      <img src='<?php echo get_template_directory_uri(); ?>/dist/images/Down.png' alt='down' />
    </div>

  </div>
 
</div>
