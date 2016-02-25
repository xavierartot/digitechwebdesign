<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>

    <div class='bloc-stay-connect'>
      <div class="container">
        <h2>stay connected with us</h2>
        <div class="form-inline">
           <!--<label>First Name</label>-->
           <input type="text" class="form-control" placeholder='test dfsdf '/>   
           <!--<label>Last Name</label>-->
           <input type="text" class="form-control" placeholder='test dfsdf ' /> 
           <!--<label>petepeters@gmail.com</label>-->
           <input type="text" class="form-control" placeholder='test dfsdf ' /> 
           <!--<label>Zip</label>-->
           <input type="text" class="form-control" placeholder='test dfsdf ' /> 


           <button href='' class='btn btn-info learn-more'>connect</button>
        </div>
      </div>
    </div>

    <div class='bloc-why-best'>
      <div class='container'>
        <div class='content-text'>
          <h2></h2>
          <p></p>
        </div>
        <div class='content-image'>
          <img src='' alt='' />
        </div>
      </div>
    </div>

    <div class='bloc-builder'>
      <div class='container'>
        <h2>Our Builders</h2>
        <img src="" alt="tree icons"/>
        <div class='content-image'>
        </div>
      </div>
    </div>

    <div class='bloc-home-plans'>
      <div class='container'>
        <h2>our home-plans</h2>
        <div class='content-image'>
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
        <h2>our home-plans</h2>
        <div class='content-image'>
        </div>
      </div>
    </div>


  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
