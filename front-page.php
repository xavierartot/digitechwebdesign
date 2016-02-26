<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>

    <div class='bloc-stay-connect'>
      <div class="container">
        <h2>stay connected with us</h2>
        <div class="form-inline">
           <!--<label>First Name</label>-->
           <input type="text" class="form-control" placeholder='First Name'/>   
           <!--<label>Last Name</label>-->
           <input type="text" class="form-control" placeholder='Last Name' /> 
           <!--<label>petepeters@gmail.com</label>-->
           <input type="text" class="form-control" placeholder='petepeters@gmail.com' /> 
           <!--<label>Zip</label>-->
           <input type="text" class="form-control" placeholder='Zip' /> 


           <button href='' class='btn btn-bv'>connect</button>
        </div>
      </div>
    </div>

    <div class='bloc-why-best'>
      <div class='bloc-img'>
        <img class='about-arrow' src='<?php echo get_template_directory_uri(); ?>/dist/images/about-arrow.png' alt='about arrow' />
        <img class='about-img-0' src='<?php echo get_template_directory_uri(); ?>/dist/images/about-bgc.png' alt='about image background' />
        <img class='about-img-1' src='<?php echo get_template_directory_uri(); ?>/dist/images/about-img1.jpg' alt='about image 1' />
        <img class='about-img-2' src='<?php echo get_template_directory_uri(); ?>/dist/images/about-img2.jpg' alt='about image 2' />
      </div>
      <div class='container'>
        <div class='row'>
          <div class='content-text'>
            <h2>Why we are the best</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  Excepteur sint occaecat cupidatat non proident</p>
          </div>
          <div class='content-image'>
            <div class='line-orange '>line orange design</div>
          </div>
        </div>
      </div>
    </div>

    <div class='bloc-builder'>
      <div class='container'>
        <div class='row'>
          <h2>Our Builders</h2>
        </div>
        <div class='row'>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tree-line.png" alt="tree icons"/>
        </div>

        <div class='hexagon'>
          <div class=''>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/builder-1.png" alt="tree icons"/>
          </div>
          <div class=''>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/builder-2.png" alt="tree icons"/>
          </div>
          <div class=''>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/builder-3.png" alt="tree icons"/>
          </div>
          <div class=''>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/builder-4.png" alt="tree icons"/>
          </div>
        </div>
        <div class='content-image'>
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
          tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
          vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
          no sea takimata sanctus est Lorem ipsum dolor sit amet.
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
          tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
          vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
          no sea takimata sanctus est Lorem ipsum dolor sit amet. w
        </div>
      </div>
    </div>
    </div>

    <div class='bloc-home-plans'>
      <div class='container'>
        <div class='row'>
          <h2>our home-plans</h2>
          <div class='content-image'>
          </div>
        </div>
      </div>
    </div>

    <div class='bloc-our-amenities'>
      <div class='bgc'></div>
      <!--cut border togheter-->
      <div class='border'></div>
      <div class='container'>
        <h2>our amenities</h2>
        <div class='content-carousel'>
        </div>
        <div class='bloc-explore-community'>
        </div>
      </div>
    </div>

    <div class='bloc-talking-about'>
      <div class='container'>
        <div class='row'>
          <h2>our home-plans</h2>
          <div class='content-image'>
          </div>
        </div>
      </div>
    </div>


    <?php get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>
