
                    <div id="additional-posts" class="row">
                        <div class="col-lg-12"> 
                        <?php   //Get the content of the JSON file using file_get_contents():

                    $json_file = get_stylesheet_directory_uri().'/mydata.json';

                    $str = file_get_contents($json_file);



                    //Now decode the JSON using json_decode():

                    $json = json_decode($str, true); // decode the JSON into an associative array
                    //You have an associative array containing all the information. To figure out how to access the values you need, you can do the following:

                    //echo '<pre>' . print_r($json, true) . '</pre>';
                    //This will print out the contents of the array in a nice readable format. Then, you access the elements you want, like so:

                    $i = 15;
                    
                    //var_dump($str);

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
                    <div class="col-lg-4 padding-combo-1">
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
                </div> <!-- End of col-lg-8 -->    
            