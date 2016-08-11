<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'global/html-header', 'global/header' ) ); ?>
<div id="front-page" class="container">
    `       <div class="row header-row">
                <div class="col-lg-2"><a href="" class="otf-rectangle">hfdx</a></div>
                <div class="col-lg-8">
                    <a href=""><h1 class="td-headline-semi-big">Once Again Trump Gets Caught</h1></a>
                </div>
                <div class="col-lg-2"><a href="" class="otf-rectangle">jgdf</a></div>
            </div>
</div>
<div id="idea-bubble" class="container">
            <div class="row header-row">
                <div class="col-lg-12">
                    <ul class="headline-confirms-more">
                        <li><a href=""><h5>What We've Seen, So Far</h5></a></li>
                        <li><a href=""><h5>What We've Seen, So Far</h5></a></li>
                        <li><a href=""><h5>What We've Seen, So Far</h5></a></li>
                    </ul>
                </div>
            </div>
            <div class="row header-row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <ul class="headline-confirms">
                        <li><a href=""><h5>What We've Seen, So Far</h5></a></li>
                        <li><a href=""><h5>What We've Seen, So Far</h5></a></li>
                        <li><a href=""><h5>What We've Seen, So Far</h5></a></li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="row padding-combo-2">
                <div class="col-lg-8">
                    
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
                <div class="ab-sidebar-right col-lg-4 padding-combo-1">
                    <?php get_sidebar(); ?>
                </div>    
                
            </div>
    </div>

<!-- **************************************************************************************** -->

        <div id="sponsored" class="container">
            <div class="row">
              <div class="col-lg-12">
                <h5>Sponsored Articles</h5>
                <ul>
                    <li>
                        <a href="" class="otf-rectangle"></a>
                        <a href=""><h5>What We've Seen, So Far</h5></a>
                    </li>
                    <li>
                        <a href="" class="otf-rectangle"></a>
                        <a href=""><h5>What We've Seen, So Far</h5></a>
                    </li>
                    <li>
                        <a href="" class="otf-rectangle"></a>
                        <a href=""><h5>What We've Seen, So Far</h5></a>
                    </li>
                    <li>
                        <a href="" class="otf-rectangle"></a>
                        <a href=""><h5>What We've Seen, So Far</h5></a>
                    </li>
                    <li>
                        <a href="" class="otf-rectangle"></a>
                        <a href=""><h5>What We've Seen, So Far</h5></a>
                    </li>
                    <li>
                        <a href="" class="otf-rectangle"></a>
                        <a href=""><h5>What We've Seen, So Far</h5></a>
                    </li>
                </ul>
              </div>
            </div>
        </div>    
        <div class="container">   
            <div class="row header-row">
                <div class="col-lg-6"> 
                    <h2>Latest Posts</h2> 
                </div>
                <div class="col-lg-6"></div>
            </div>    

            <div class="row">
                <div class="col-lg-8 equal_height padding-combo-1">
                    <?php if ( have_posts() ): ?>
                    <?php while ( have_posts() ) : the_post(); ?>  
                    <div class="article row">
                        <div class="col-lg-4 equal_height-2">
                            <?php  // check if the post has a Post Thumbnail assigned to it.
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                } ?>
                        </div>
                        <div class="col-lg-8 equal_height-2">
                            <h2><a href="<?php esc_url( the_permalink() ); ?>"
                                   title="Permalink to <?php the_title(); ?>" 
                                   rel="bookmark"><?php the_title(); ?>
                                </a></h2>
                            <?php echo excerpt(30); ?>
                         </div> 
                    </div>    
                        <?php endwhile; ?>
                    <!-- End of the main loop -->
                        <?php else: ?>
                        <h2>No posts to display</h2>
                        <?php endif; ?>
                </div> <!-- End of col-lg-8 -->
            <div class="col-lg-4 side-right equal_height padding-combo-1">
                              
            </div>     
            </div>

<!-- Add the pagination functions here. -->
<div class="pagenavi row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <?php wp_pagenavi(); ?>
    </div>
    <div class="col-lg-3"></div>
</div>

    </div>

<!-- **************************************************************************************** -->


<?php Starkers_Utilities::get_template_parts( array( 'global/footer','global/html-footer') ); ?>    