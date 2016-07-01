<?php

function getAds(){
					//Get the content of the JSON file using file_get_contents():

                    $str = file_get_contents('adsdata1.json');
                    //Now decode the JSON using json_decode():

                    $json = json_decode($str, true); // decode the JSON into an associative array
                    //You have an associative array containing all the information. To figure out how to access the values you need, you can do the following:

                    //echo '<pre>' . print_r($json, true) . '</pre>';
                    //This will print out the contents of the array in a nice readable format. Then, you access the elements you want, like so:

                    $i = 0;
                    

                    //Or loop through the array however you wish:
                    foreach ($json['posts'] as $post) {

                        $href  = $json['posts'][$i]['href'];
                        $image = $json['posts'][$i]['image'];

                    ?>    

                        <article class="grid-item">
                        <a class="item-image" href="<?php echo $href ?>">
                        <img src="<?php echo $image ?>" alt="" />
                        </a>
                        </article>

                    <?php  $i ++;  
                    }
}                    