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
    <link href="assets/css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/js/compile/compiled.libs.js"></script>
    <script src="assets/js/compile/compiled.js"></script>
    <style>
            /*body {background-color:#39424D;}*/
            /*.grid-item { border: 1px solid #000; padding: 20px; width: auto; float: left; clear: both;}*/
            .item-image{ display:block;}
            .item-title-link{ clear:both; display:block;}
            .logo-title img{ 
                width: 150px; 
                margin-bottom: 100px; 
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
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
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

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Scrolling Nav</h1>
                    <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <div id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Section</h1>
                    

                    <ul id="filters">
                        <li><a href="#" data-filter="*">all</a></li>
                        <li><a href="#" data-filter=".voyelle">voyelle</a></li>
                        <li><a href="#" data-filter=".consonne">consonne</a></li>
                    </ul>

                    <ul id="sorts">
                        <li><a href="#">text</a></li>
                        <li><a href="#" data-sort-by="foo">data-foo</a></li>
                        <li><a href="#" data-sort-way="desc">text desc</a></li>
                        <li><a href="#" data-sort-by="foo" data-sort-way="desc">data-foo desc</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div id="postDiv" class="col-lg-12">

            <?php   //Get the content of the JSON file using file_get_contents():

                    $str = file_get_contents('mydata.json');
                    //Now decode the JSON using json_decode():

                    $json = json_decode($str, true); // decode the JSON into an associative array
                    //You have an associative array containing all the information. To figure out how to access the values you need, you can do the following:

                    echo '<pre>' . print_r($json, true) . '</pre>';
                    //This will print out the contents of the array in a nice readable format. Then, you access the elements you want, like so:

                    $i = 0;
                    

                    //Or loop through the array however you wish:
                    foreach ($json['posts'] as $post) {

                        $title = $json['posts'][$i]['title'];
                        $href  = $json['posts'][$i]['href'];
                        $image = $json['posts'][$i]['image'];

                    ?>    

                        <article class="grid-item">
                        <a class="item-image" href="<?php echo $href ?>">
                        <img src="<?php echo $image ?>" alt="" />
                        </a>
                        <a class="item-title-link" href="index.html"><?php echo $title ?></a>
                        </article>

                    <?php    


                        $i ++;


                    foreach ($post as $field => $value) {
                    // Use $field and $value here
                        //echo $value . ' - ';
                    }
}
                ?>

                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->

    
 
    

    <script>
                        // $('#postDiv').masonry({
                        //   // options
                        //   itemSelector: '.grid-item',
                        //   columnWidth: 200
                        // });
    </script>
    <script src="//localhost:35729/livereload.js"></script>
</body>

</html>
