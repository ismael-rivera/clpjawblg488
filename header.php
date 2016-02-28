<?php require_once("html_header.php") ?>

  <body <?php body_class(); ?> data-pinterest-extension-installed="cr1.39.1">
  <div data-role="page">
    <div data-role="header">
    <!-- <div id="sessions" class="container navbar fborder">
        <div class="row">
          <div class="col-sm-2">Tuesday February 9, 2016</div>
          <div class="col-sm-4"><?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
          <div class="col-sm-2"><?php //bloginfo( 'description' ); ?></div>
          <div class="col-sm-4"><?php get_search_form(); ?></div>
        </div>
    </div> -->

    <div id="header" class="container">
        <div class="row">
          <div class="col-md-4">
          <h1><a id="logo" class="blog-nav-item active" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
          </div>
          <div class="col-md-8">
          <!-- <a id="header_ad" class="fborder" href="http://getbootstrap.com/examples/blog/#">Home</a> -->
          </div>
        </div>  
        <div class="row">
          <div class="col-sm-12">
          <a class="blog-nav-item active" href="http://getbootstrap.com/examples/blog/#">Home</a>
          <a class="blog-nav-item" href="http://getbootstrap.com/examples/blog/#">New features</a>
          <a class="blog-nav-item" href="http://getbootstrap.com/examples/blog/#">Press</a>
          <a class="blog-nav-item" href="http://getbootstrap.com/examples/blog/#">New hires</a>
          <a class="blog-nav-item" href="http://getbootstrap.com/examples/blog/#">About</a>
          </div>
        </div>
    </div>
    </div>       



