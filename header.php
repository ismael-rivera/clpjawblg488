

  <body <?php body_class(); ?> data-pinterest-extension-installed="cr1.39.1">
  
    
    <!-- <div id="sessions" class="container navbar fborder">
        <div class="row">
          <div class="col-sm-2">Tuesday February 9, 2016</div>
          <div class="col-sm-4"><?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
          <div class="col-sm-2"><?php //bloginfo( 'description' ); ?></div>
          <div class="col-sm-4"><?php get_search_form(); ?></div>
        </div>
    </div> -->
   <!--  <div id="mobi-header" class="container-fluid">
      <div class="row">
          <div class="col-lg-12"></div>
      </div>    
    </div> -->
    <div id="header" class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="container">
              <div class="row">
                <div class="col-md-2">
                  <h1><a id="logo" class="blog-nav-item active" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
                <div class="col-sm-7">
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>
                <div class="col-sm-3">
                  <div id="social-top"></div>
                </div>
              </div>  
            </div>    
          </div>
        </div>
    </div>
    <div id="newscat-bar" class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="container">
            <div id="newscat-rss" class="col-lg-1"></div>
            <div id="newscat-menu" class="col-lg-11"><?php wp_nav_menu( array( 'theme_location' => 'newscat-menu' ) ); ?></div>
          </div>
        </div>  
      </div>    
    </div>
    <div id="featured-bar" class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="container">
            <div id="abfeat" class="col-lg-2 fborder">Ad</div>
            <div id="abfeat" class="col-lg-6">
              <?php $cat_id = get_cat_id('Featured'); ?>
              <?php if ( have_posts() ) { 
                      while ( have_posts() ) { 
                        the_post(); 
                          if ( in_category($cat_id) ){
                            the_post_thumbnail('featured');
                          }
                      }
                    }
              ?>
             </div>
            <div id="abfeatlist" class="col-lg-2 fborder">Select</div>
            <div id="abfeatlist" class="col-lg-2 fborder">Ad</div>
          </div>
        </div>  
      </div>    
    </div>
          



