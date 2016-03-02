<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>

  <div class='bloc-stay-connect'>
    <!--<div class="container-fluid">-->
      <!--<h2>stay connected with us</h2>-->
      <!--<div class='wrap'>-->
        <!--<div class="form-inline">-->
          <!--<div class='input-text'>-->
            <!--[><label>First Name</label><]-->
            <!--<input type="text" class="form-control" placeholder='First Name'/>   -->
            <!--[><label>Last Name</label><]-->
            <!--<input type="text" class="form-control" placeholder='Last Name' /> -->
            <!--[><label>petepeters@gmail.com</label><]-->
            <!--<input type="text" class="form-control" placeholder='petepeters@gmail.com' /> -->
            <!--[><label>Zip</label><]-->
            <!--<input type="text" class="form-control" placeholder='Zip' /> -->
            <!--<button href='' class='btn btn-bv'>connect</button>-->
          <!--</div>-->

        <!--</div>-->
      <!--</div>-->

    <!--</div>-->


    <div class="container-fluid">
      <h2>stay connected with us</h2>
      <form action="#" method="post" class='form-bv'>            
        <fieldset>
          <!--<legend>Personal Information</legend>-->
          <div class='row'>
            <div class='col-sm-3'>    
              <div class='form-group'>
                <!--<label for="user_title">Title</label>-->
                <input class="form-control" name="user[title]" size="30" type="text" placeholder='First Name'/>
              </div>
            </div>
            <div class='col-sm-3'>
              <div class='form-group'>
                <!--<label for="user_firstname">First name</label>-->
                <input class="form-control" name="user[firstname]" required="true" size="30" type="text" placeholder='Last Name' />
              </div>
            </div>
            <div class='col-sm-3'>
              <div class='form-group'>
                <!--<label for="user_lastname">Last name</label>-->
                <input class="form-control" name="user[lastname]" required="true" size="30" type="text" placeholder='petepeters@gmail.com'/>
              </div>
            </div>
            <div class='col-sm-3'>
              <div class='form-group'>
                <!--<label for="user_lastname">Last name</label>-->
                <input class="form-control btn-bv" name="user[lastname]" required="true" size="30" type="submit"/> 
                <!--<button href='' class='btn btn-bv'>connect</button>-->
              </div>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>

  <div class='bloc-why-best'>
    <div class='bloc-img'>
      <img class='about-arrow' src='<?php echo get_template_directory_uri(); ?>/dist/images/about-arrow.png' alt='about arrow' />
      <img class='about-img-0' src='<?php echo get_template_directory_uri(); ?>/dist/images/about-bgc.png' alt='about image background' />
      <img class='about-img-1' src='<?php echo get_template_directory_uri(); ?>/dist/images/about-img1.jpg' alt='about image 1' />
      <img class='about-img-2' src='<?php echo get_template_directory_uri(); ?>/dist/images/about-img2.jpg' alt='about image 2' />
    </div>

    <div class='container-fluid'>
      <div class='row'>
        <div class='content-text'>
          <div>
            <h2>Why we are the best</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  Excepteur sint occaecat cupidatat non proident</p>
          </div>
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
      <div class='row '>
        <div class='logo-title'>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tree-line.png" alt="tree icons"/>
        </div>
      </div>
      <div class='hexagon-row-1 row'>
        <div class='col-lg-offset-0'>
          <a href=''>
            <img class='' src="<?php echo get_template_directory_uri(); ?>/assets/images/builder-1.png" alt="tree icons"/>
          </a>
        </div>
        <div>
          <a href=''>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/builder-2.png" alt="tree icons"/>
          </a>
        </div>
        <div>
          <a href=''>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/builder-3.png" alt="tree icons"/>
          </a>
        </div>
        <div>
          <a href=''>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/builder-4.png" alt="tree icons"/>
          </a>
        </div>
      </div>
      <div class='hexagon-row-2 row'>
        <div class='col-lg-offset-1 '>
          <a href=''>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/builder-5.png' alt='' />
          </a>
        </div>
        <div class=''>
          <a href=''>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/builder-6.png' alt='' />
          </a>
        </div>
        <div class=''>
          <img src='<?php echo get_template_directory_uri(); ?>/assets/images/builder-7.png' alt='' />
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class='bloc-home-plans'>
    <div class='container'>
      <div class='row'>
        <h2>our home-plans</h2>
      </div>
      <div class='row '>
        <div class='logo-title'>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tree-line.png" alt="tree icons"/>
        </div>
      </div>

      <div class='row first-row'>
        <div class='col-lg-3 col-md-3 col-sm-6'>    
          <div class='bx1 bx'>
            <img class="img-responsive " src="<?php echo get_template_directory_uri(); ?>/assets/images/grid-1.jpg" />
            <div class='content-home-plan'>
              <p>Brandeis</p>
              <p>From $359,990</p>
            </div>
          </div>
        </div>
        <div class='col-lg-3 col-md-3 col-sm-6'>    
          <div class='bx2 bx'>
            <img class="img-responsive " src="<?php echo get_template_directory_uri(); ?>/assets/images/grid-2.jpg" />
            <div class='content-home-plan'>
              <p>Pomona</p>
              <p>From 449,990</p>
              <div class='bloc-img'>
                <span>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/images/ico-home-plan-sq.png'   alt='' />
                </span>
                <span>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/images/ico-home-plan-bath.png' alt='' />
                </span>
                <span>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/images/ico-home-plan-bed.png'  alt='' />
                </span>
                <span>
                  <img src='<?php echo get_template_directory_uri(); ?>/assets/images/ico-home-plan-car.png'  alt='' />
                </span>
              </div>
              <span>
                <button href='' class='btn btn-bv'>discover</button>
              </span>
            </div>
          </div>
        </div>
        <div class='col-lg-3 col-md-3 col-sm-6'>    
          <div class='bx3 bx'>
            <img class="img-responsive " src="<?php echo get_template_directory_uri(); ?>/assets/images/grid-3.jpg" />
            <div class='content-home-plan'>
              <p>vassar</p>
              <p>From $359,990</p>
            </div>
          </div>
        </div>
        <div class='col-lg-3 col-md-3 col-sm-6 '>    
          <div class='bx3 bx'>
            <img class="img-responsive " src="<?php echo get_template_directory_uri(); ?>/assets/images/grid-4.jpg" />
            <div class='content-home-plan'>
              <p>carleton</p>
              <p>From $359,990</p>
            </div>
          </div>
        </div>
      </div>
      <div class='row second-row'>
        <div class='col-lg-3 col-md-3 col-width3 col-sm-6'>    
          <div class='bx4 bx'>
            <img class="img-responsive " src="<?php echo get_template_directory_uri(); ?>/assets/images/grid-5.jpg" />
            <div class='content-home-plan'>
              <p>Bryn mawr</p>
              <p>From $359,990</p>
            </div>
          </div>
        </div>
        <div class='col-lg-3 col-md-3 col-md-3 col-width4 col-sm-6'>    
          <div class='bx5 bx'>
            <img class="img-responsive " src="<?php echo get_template_directory_uri(); ?>/assets/images/grid-6.jpg" />
            <div class='content-home-plan'>
              <p>white lodge</p>
              <p>From $359,990</p>
            </div>
          </div>
        </div>
        <div class='col-lg-3 col-md-3 col-sm-6 '>    
          <div class='bx6 bx'>
            <img class="img-responsive " src="<?php echo get_template_directory_uri(); ?>/assets/images/grid-7.jpg" />
            <div class='content-home-plan'>
              <p>barnard</p>
              <p>From $359,990</p>
            </div>
          </div>
        </div>
        <div class='col-lg-3 col-md-3 col-sm-6 md--height'>    
          <div class='bx7 bx'>
            <img class="img-responsive " src="<?php echo get_template_directory_uri(); ?>/assets/images/grid-8.jpg" />
            <div class='content-home-plan'>
              <p>amherst</p>
              <p>From $359,990</p>
            </div>
          </div>
        </div>
      </div>

    </div>



  </div> <!--end bloc-->




  <div class='bloc-our-amenities'>
    <div class='container-fluid '>
      <div class='row bx-title'>
        <div class='title'>
          <h2>our amenities</h2>
        </div>
        <div class='line-orange '>
          line orange design
        </div>
      </div>
    </div>   
    <div class='container'>

      <div class='content-carousel'>
        <div class='fishing'>
          sdfsdf
          s
          dfsdfsdf
        </div>
        <div class="owl-carousel owl-theme">
          <div class='item'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/amenities-carousel1.jpg'  alt='carousel' />
          </div>
          <div class='item'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/amenities-carousel1.jpg'  alt='carousel' />
          </div>
          <div class='item'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/amenities-carousel1.jpg'  alt='carousel' />
          </div>
          <div class='item'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/amenities-carousel1.jpg'  alt='carousel' />
          </div>
          <div class='item'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/amenities-carousel1.jpg'  alt='carousel' />
          </div>
          <div class='item'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/images/amenities-carousel1.jpg'  alt='carousel' />
          </div>
        </div>
        <!--<div class="owl-carousel">-->
        <!--<div data-dot="1"></div>-->
        <!--<div data-dot="2"></div>-->
        <!--<div data-dot="3"></div>-->
        <!--<div data-dot="4"></div>-->
        <!--</div>-->
      </div>
      <div class='bloc-explore-community'>
      </div>
    </div>
  </div><!--end bloc-->

  <div class='bloc-talking-about'>
    <div class='container'>
      <div class='row'>
        <h2>our home-plans</h2>
        <div class='content-image'>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="post">
            1
            Bacon ipsum dolor amet chuck cow strip steak ham. Venison sirloin ball tip chicken, meatloaf bresaola biltong capicola prosciutto. Rump frankfurter pork chop tenderloin cow venison sirloin drumstick beef short ribs ball tip spare ribs. Tongue short loin bresaola, boudin swine pork ham turducken pig capicola meatball.
          </div>
          <div class="post">
            2
            Ball tip chicken shoulder kevin sirloin biltong pastrami andouille fatback shank cow. Turkey tail pancetta pork chop brisket ham hock. Alcatra shoulder meatloaf salami spare ribs. Beef picanha ham meatloaf tri-tip boudin porchetta prosciutto strip steak jerky kevin doner. Cupim ribeye salami spare ribs landjaeger boudin pork chop jerky filet mignon beef ribs sirloin. Cupim doner biltong jerky brisket kevin shank hamburger turducken bacon salami fatback.
          </div>
          <div class="post">
            3
            Hamburger beef ribs boudin prosciutto ground round. Salami jowl short ribs, frankfurter filet mignon pork belly cow. Strip steak t-bone sirloin shoulder pork chop hamburger picanha venison tenderloin salami spare ribs corned beef. Tri-tip andouille meatball kevin, porchetta ball tip pork belly hamburger bacon pig pastrami spare ribs strip steak. Leberkas salami sausage andouille. Shank corned beef pancetta cow fatback cupim leberkas ball tip. Cow pork swine, meatball kevin pork loin fatback rump brisket tri-tip jowl turducken strip steak leberkas.                
          </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="post">
            4
            Corned beef prosciutto pork pork loin chicken turkey. Venison bresaola beef kielbasa swine tenderloin tongue pork chuck sirloin corned beef ribeye cupim t-bone. Salami pork chop pork belly filet mignon porchetta turkey chicken cupim tri-tip. Picanha fatback tongue drumstick shoulder t-bone filet mignon, salami chuck leberkas landjaeger kielbasa. Landjaeger porchetta swine cupim, capicola flank meatloaf pig hamburger brisket shank frankfurter short ribs. Rump short loin tenderloin shankle pig brisket.
          </div>
          <div class="post">
            5
            Pork loin pastrami corned beef venison rump. Cupim meatloaf sirloin pig tail pancetta tongue sausage pork loin ground round salami venison ham hock jerky shank. Shankle brisket ham hock, doner andouille landjaeger shank bacon pastrami venison jerky kielbasa. Chicken kielbasa prosciutto, short ribs boudin beef ribeye chuck andouille beef ribs corned beef cupim shoulder. Short ribs kevin tri-tip, venison tongue filet mignon picanha biltong ground round. Hamburger beef ribs pork chop, jerky capicola shank ribeye porchetta shoulder turkey leberkas pancetta ground round jowl.
          </div>
          <div class="post">
            6
            Andouille short loin ham hock bresaola beef ribs. Short ribs meatball tri-tip swine ham pastrami alcatra chuck. Shank pastrami sirloin strip steak, ham biltong tri-tip jowl pancetta tenderloin. Sirloin alcatra tenderloin drumstick pancetta. Pork loin ground round venison short ribs. Frankfurter tenderloin bacon pork loin ribeye.
          </div>
        </div> 
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="post">
            7
            Nulla in pork belly dolor. Labore laboris eiusmod ut ribeye ut cupim. Labore boudin kielbasa est shankle dolore minim aute exercitation swine. Irure aliqua do, labore lorem elit ut commodo.
          </div>
          <div class="post">
            8
            Doner do quis, turducken spare ribs velit consequat id andouille eu shankle est in. Short loin ham kevin andouille spare ribs culpa esse dolore consectetur id nisi. Turkey incididunt cupim, laboris pancetta biltong ullamco proident nulla turducken jerky voluptate shankle eu. Sint ut kielbasa aliqua est beef venison laborum quis meatloaf flank qui salami voluptate. Tempor cillum elit, officia chicken flank pancetta chuck sint aliqua t-bone velit eiusmod picanha. Meatloaf ullamco ground round pastrami boudin sunt.
          </div>
          <div class="post">
            9
            Pork shank spare ribs elit sunt irure, magna strip steak quis alcatra brisket. Consectetur dolore eu ut corned beef sausage qui tri-tip ball tip pork belly id tenderloin esse aute. Sint in enim est tempor, capicola consequat bresaola officia. Est leberkas cow, sausage excepteur tenderloin consequat chuck ullamco short ribs magna do alcatra.
          </div>
        </div> 
      </div>
    </div>


    <div class="container">
      <h1>Masonry CSS with Bootstrap</h1>
      <div class="row">
        <div class="item">
          <div class="well"> 
            1 blah blah blah
          </div>
        </div>
        <div class="item">
          <div class="well"> 
            2 blah blah blah blah blah blah blah blah blah blah blah blahblah blah blah blah blah blah
          </div>
        </div>
        <div class="item">
          <div class="well"> 
            3 blah blah blah blah blah blah blah blah h
          </div>
        </div>
        <div class="item">
          <div class="well">
            blah blah blah blah 
          </div>
        </div>
        <div class="item">
          <div class="well"> 
            blah blah blah. The container inside the item must be position:relative
          </div>
        </div>
        <div class="item">
          <div class="well"> 
            blah blah blah blah blah blah blah blah blah blah blah blahblah blah blah blah blah blah
          </div>
        </div>
        <div class="item">
          <div class="well">
            blah blah blah blah blah blah blah blah h
          </div>
        </div>
        <div class="item">
          <div class="well"> 
            blah blah blah blah
          </div>
        </div>
        <div class="item">
          <div class="well"> 
            blah blah blah blah blah blah blah blah blah blah blah blah
          </div>
        </div>
        <div class="item">
          <div class="well"> 
            blah blah blah. The container inside the item must be position:relative
          </div>
        </div>
      </div>
    </div>
  </div>




  <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>
