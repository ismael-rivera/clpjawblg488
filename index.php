<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    

    <!-- Custom CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--     
    <script src="assets/js/compile/compiled.libs.js"></script>
    <script src="assets/js/compile/compiled.js"></script>
 -->
    <style>
            /*body {background-color:#39424D;}*/
            /*.grid-item { border: 1px solid #000; padding: 20px; width: auto; float: left; clear: both;}*/
            .item-title-link{ clear:both; display:block;}
            .logo-title img{ 
                width: 150px; 
                border: 6px solid #39424D; 
                padding: 0.4em 0.5em 0.4em 0.1em; 
                background-color:#39424D;
            }
            #dylay { margin: 0; padding: 0; list-style: none; }
            #dylay li { float: left; margin: 2px; border-radius: 5px; padding: 2px 5px; font-size: 10px; }
            .myredbox { width:80px; height:80px; background-color: red;}
    </style>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="logo-title">
                    <img src="images/logo-opt.svg" alt="Kiwi standing on oval">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top">Disclaimers</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">News</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- About Section -->
    <div id="category-select">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul id="filters">
                        <li><a href="#" data-filter="*">all</a></li>
                        <li><a href="#" data-filter=".aviation">aviation</a></li>
                        <li><a href="#" data-filter=".wildlife">wildlife</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul id="sorts">
                        <li><a href="#">text</a></li>
                        <li><a href="#" data-sort-by="foo">data-foo</a></li>
                        <li><a href="#" data-sort-way="desc">text desc</a></li>
                        <li><a href="#" data-sort-by="foo" data-sort-way="desc">data-foo desc</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>        
    <section id="about" class="about-section">
        <div class="container">        
            <div class="row">
                
                    
            <?php   //Get the content of the JSON file using file_get_contents():

                    $str = file_get_contents('mydata.json');
                    //Now decode the JSON using json_decode():

                    $json = json_decode($str, true); // decode the JSON into an associative array
                    //You have an associative array containing all the information. To figure out how to access the values you need, you can do the following:

                    //echo '<pre>' . print_r($json, true) . '</pre>';
                    //This will print out the contents of the array in a nice readable format. Then, you access the elements you want, like so:

                    $i = 0;
                    

                    //Or loop through the array however you wish:
                    foreach ($json['posts'] as $post) {

                        $title = $json['posts'][$i]['title'];
                        $href  = $json['posts'][$i]['href'];
                        $image = $json['posts'][$i]['image'];
                        $catgrs = $json['posts'][$i]['categories'];

foreach($catgrs as $catgr){ 
  echo $catgr;
}

                    ?>    
                    <div class="col-lg-3">
                        <article id="dylay" class="grid-item <?php echo $catgr ?>">
                            <a class="item-image" href="<?php echo $href ?>">
                                <img class="img-responsive" src="<?php echo $image ?>" alt="" />
                                <h4 class="item-title-link"><?php echo $title ?></h4>
                            </a>           
                        </article>
                    </div>
                    <?php  $i ++;  } ?>


                    
                
            </div>
        </div>
    </section>


   <!--  <div id="footer-fluid" class="container-fluid">
<div id="footer" class="container">
  <div class="row">
    <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-12">
              <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="row">
              <div class="col-sm-6 square-ad">HELLO</div>
              <div class="col-sm-6 square-ad">WORJEHWWJSIK</div>
            </div>
            <div class="row">
              <div class="col-sm-6 square-ad">HELLO</div>
              <div class="col-sm-6 square-ad">WORJEHWWJSIK</div>
            </div>
            <div class="row">
              <div class="col-sm-6 square-ad">HELLO</div>
              <div class="col-sm-6 square-ad">WORJEHWWJSIK</div>
            </div>
          </div>
            <div id="column1" class="link-column col-sm-2">
            <ul>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
            </ul>
          </div>
          <div id="column2" class="link-column col-sm-2">
            <ul>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
            </ul>
          </div>
          <div id="column3" class="link-column col-sm-2">
            <ul>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
            </ul>
          </div>
          <div id="column4" class="link-column col-sm-2">
            <ul>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
              <li><a href="#">link</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div id="subfooter" class="container-fluid">
  <div class="spacer"></div> 
  <div class="row">
    <div class="col-sm-12">
      <div class="container">
        <div class="row">
            <div class="col-sm-4"><p class="text-muted">© 2015 Company, Inc.</p></div>
            <div class="col-sm-4">ads</div>
            <div class="col-sm-4">ads</div>
        </div>
      </div>
    </div>
  </div>
</div>      -->

    


    <script src="assets/js/libs/jquery.js"></script>
    <script src="assets/js/libs/jquery.easing.js"></script>
    <script src="assets/js/libs/dylay.js"></script>
    <script src="assets/js/main.dylay.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="//localhost:35729/livereload.js"></script>
</body>

</html>
