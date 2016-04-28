<?php require_once("html_header.php") ?>

  <body <?php body_class(); ?> data-pinterest-extension-installed="cr1.39.1">
  
    
    <!-- <div id="sessions" class="container navbar fborder">
        <div class="row">
          <div class="col-sm-2">Tuesday February 9, 2016</div>
          <div class="col-sm-4"><?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
          <div class="col-sm-2"><?php //bloginfo( 'description' ); ?></div>
          <div class="col-sm-4"><?php get_search_form(); ?></div>
        </div>
    </div> -->

    <div id="header" class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <h1><a id="logo" class="blog-nav-item active" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
                <div class="col-sm-8">
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>
              </div>  
            </div>    
          </div>
        </div>
    </div>
          



