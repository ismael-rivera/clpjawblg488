<? /*header('Status: 301 Moved Permanently', false, 301);    
   header('Location: uc/index.php');    
   exit();*/ ?>
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
  <script>
    function imgError(image) {
        image.onerror = "";
        image.src = "assets/img/noimage2.jpg";
        return true;
    }
  </script>
    <style>
            /*body {background-color:#39424D;}*/
            /*.grid-item { border: 1px solid #000; padding: 20px; width: auto; float: left; clear: both;}*/
            .item-title-link{ clear:both; display:block;}
            #dylay { margin: 0; padding: 0; list-style: none; }
            #dylay li { float: left; margin: 2px; border-radius: 5px; padding: 2px 5px; font-size: 10px; }
            .myredbox { width:80px; height:80px; background-color: red;}
    </style>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <div id="session-social" class="container">
        <div class="row">
            <div id="top-social" class="col-lg-4">
                <!-- <li><a href="index.html" class="menu-link">Facebook</a></li> -->
                <li><a id="twitter-32" href="index.html" class="top-social-icon"></a></li>
                <li><a id="rss-32" href="index.html" class="top-social-icon"></a></li>
                <!-- <li><a id="tumblr-32" href="index.html" class="top-social-icon"></a></li> -->
                <!-- <li><a href="index.html" class="menu-link">YouTube</a></li> -->
            </div>
            <div id="social" class="col-lg-8"></div>
        </div>
    </div>
    <div id="logo-ad" class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="index.html" class="logo-title">
                    <img src="assets/img/logo.png" alt="Kiwi standing on oval">
                </a>
            </div>
            <div class="col-lg-8"></div>
        </div>
    </div>
    <div id="top-menu" class="container">
        <div class="row">
            <div id="menu-catalog-center" class="col-lg-12">
              <ul class="catalog-menu">
                <li><a href="index.html" class="menu-link">Politics</a></li>
                <li><a href="index.html" class="menu-link">Climate Change</a></li>
                <li><a href="index.html" class="menu-link">Music</a></li>
                <li><a href="index.html" class="menu-link">Money</a></li>
                <li><a href="index.html" class="menu-link">News</a></li>
                <li><a href="index.html" class="menu-link">Tech</a></li>
                <li><a href="index.html" class="menu-link">Science</a></li>
                <li><a href="index.html" class="menu-link">Conspiracy</a></li>
                <li><a href="index.html" class="menu-link">Awesome</a></li>
                <li><a href="index.html" class="menu-link">Arts & Entertainment</a></li>
              </ul>  
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <!-- <div id="category-select" class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul id="filters">
                    <li><a href="#" data-filter="*">all</a></li>
                    <li><a href="#" data-filter=".aviation">aviation</a></li>
                    <li><a href="#" data-filter=".wildlife">wildlife</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <ul id="sorts">
                    <li><a href="#">text</a></li>
                    <li><a href="#" data-sort-by="foo">data-foo</a></li>
                    <li><a href="#" data-sort-way="desc">text desc</a></li>
                    <li><a href="#" data-sort-by="foo" data-sort-way="desc">data-foo desc</a></li>
                </ul>
            </div>
        </div>
    </div> -->        
    <section id="workspace-section" class="workspace">
        <div class="container">
            <!-- <div class="row">
              <div class="col-lg-12">
                <h3>Just so you know...:</h3>
                <p>There used to be a few people working to find this websites direction. Now there is only one. Please be gentle, as I try my best to get
                   some decent articles up in this mamma jamma. Basically, I'm stuck with all the work now. Yay!! Good news is this website is all mine now
                   and since I paid for it anyways I might as well run it the way I want without any meetings, memos, emails, or editor whathaveyous. Since this website
                   is literally brandspanking new and there is probably no one reading this right now (or is there?), I doubt there will be much fuzz about how I run it.
                   Besides, I am, at this point, of the opinion that artistic vulnerability makes for far better expression than salesmanship in the pursuit of exposure.</p> 
                <p>Or not. Either way, I could give a shit. I'm doing this.</p>
              </div>
              <div class="col-lg-12">
                <h3>Workspace Station:</h3>
                <p>This is a wall of things I like, read and use while I am working on my own content.</p>
              </div>
            </div>  -->       
            <div class="row">
                
                    
            <?php   //Get the content of the JSON file using file_get_contents():

                    $str = file_get_contents('mydata.json');
                    //Now decode the JSON using json_decode():

                    $json = json_decode($str, true); // decode the JSON into an associative array
                    //You have an associative array containing all the information. To figure out how to access the values you need, you can do the following:

                    //echo '<pre>' . print_r($json, true) . '</pre>';
                    //This will print out the contents of the array in a nice readable format. Then, you access the elements you want, like so:

                    $i = 15;
                    

                    //Or loop through the array however you wish:
                    foreach ($json['posts'] as $post) {

                        $title = $json['posts'][$i]['title'];
                        $href  = $json['posts'][$i]['href'];
                        $alt  = $json['posts'][$i]['alt'];
                        $image = $json['posts'][$i]['image'];
                        $catgrs = $json['posts'][$i]['categories'];

foreach($catgrs as $catgr){ 
  //echo $catgr;
}

                    ?>    
                    <div class="col-lg-3">
                        <article class="grid-item <?php echo $catgr ?>">
                            <a class="item-image" href="<?php echo $href ?>">
                                <img class="img-responsive" src="<?php echo $image ?>" alt="<?php echo $title ?>" onerror="imgError(this);" />
                                <h4 class="item-title-link"><?php echo $title ?></h4>
                            </a>           
                        </article>
                    </div>
                    <?php  $i --;  } ?>


                    
                
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80763354-1', 'auto');
  ga('send', 'pageview');

</script>

    <script src="//localhost:35729/livereload.js"></script>
</body>

</html>
