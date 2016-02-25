<footer class="content-info">
  <div class="container">
    <div class='row'>
      <div class='col-xs-4'>
          <?php
          if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav-footer']);
          endif;
          ?>
      </div>

      <?php //dynamic_sidebar('sidebar-footer'); ?>

      <div class='col-xs-4 '>
      <ul class="social">
         <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Pinterest.png"></a></li>
         <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Facebook.png"></a></li>
         <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/dist/images/Twitter.png"></a></li>
       </ul>
      </div>

      <div class='col-xs-4 thrid-col-footer'>
        <img class='pull-right' src="<?php echo get_template_directory_uri(); ?>/dist/images/Logo-footer.png" alt="brand"/>
      </div>
    </div>
    <div class="copyright row">
      Copyright © 2016 Brookfield Residential. All Rights Reserved
      <img class='pull-right' src="<?php echo get_template_directory_uri(); ?>/dist/images/Equal-Home.png" alt="house"/>
    </div>    
  </div>
</footer>
