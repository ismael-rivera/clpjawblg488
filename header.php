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
    <nav class="navbar navbar-default navbar-static-top">
             
      
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    

    </nav>


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
          



