<?php Starkers_Utilities::get_template_parts( array( 'html_header', 'header' ) ); ?>

<?php
$args = array( 'posts_per_page' => 4, 'category_name' => 'featured' );
$i = 0;
$feat = array();
$postslist = get_posts( $args );
foreach ( $postslist as $post ) : setup_postdata( $post ); 
 $postid[$i] = get_the_ID();
 $i++; 
 endforeach; 
 wp_reset_postdata();
?>




    <div id="featured" class="container fborder">
      <!-- Example row of columns -->
      <div class="row">
        <div id="feat1" class="col-sm-4">
          <?php
$post_id = $postid[0];
$queried_post = get_post($post_id);
$title = $queried_post->post_title;
echo "<h2>".$title."</h2>";
echo $queried_post->post_content;
?>


          
          <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
        </div>
        <div class="col-sm-8 lborder">
            <div class="row">
              <div id="feat2" class="col-sm-12">  
                <?php
$post_id = $postid[1];
$queried_post = get_post($post_id);
$title = $queried_post->post_title;
echo "<h2>".$title."</h2>";
echo $queried_post->post_content;

?>
                <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
              </div>  
            </div>
            <div class="row">
              <div id="masthead-ad" class="col-sm-6 tborder">  
                               <?php
$post_id = $postid[2];
$queried_post = get_post($post_id);
$title = $queried_post->post_title;
echo "<h2>".$title."</h2>";
echo $queried_post->post_content;

?>
                <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
              </div>
              <div id="feat4" class="col-sm-6 tborder lborder">  
                               <?php
$post_id = $postid[3];
$queried_post = get_post($post_id);
$title = $queried_post->post_title;
echo "<h2>".$title."</h2>";
echo $queried_post->post_content;

?>
                <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>
              </div>   
            </div>   
        </div>
      </div>
    </div>
    <div class="spacer"></div>  
    <div id="cap-ads-section" class="container fborder">
      <div class="row">
          <div class="col-sm-4 fborder">H</div>
          <div class="col-sm-4 fborder">E</div>
          <div class="col-sm-4 fborder">LLO</div>
      </div>
    </div>
    <div class="spacer"></div> 
    <div id="content-section" class="container fborder">
        <div class="row">
              <div id="content" class="col-sm-8 rborder">

<?php global $post; // required
//$args = array('category' => -9); // exclude category 9
$custom_posts = get_posts();
foreach($custom_posts as $post) : setup_postdata($post);?>
<!-- article-web-component BEGIN -->
                <div class="row">
                  <div id="article_pic" class="col-sm-4"></div>
                  <div id="article_link" class="col-sm-8 lborder">
                    <h2><a class="article_link_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="excerpt">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                  </div>
                </div>
<!-- article-web-component END -->
<?php endforeach; ?>
                

              </div>
              <div id="sidebar" class="col-sm-4">
              </div>
        </div> 
    </div>

    <div class="spacer"></div> 

    <div id="ads" class="container">
      <div class="col-sm-4 fborder">ads</div>
      <div class="col-sm-4 fborder">ads</div>
      <div class="col-sm-4 fborder">ads</div>
    </div>

    <div class="spacer"></div> 

<?php Starkers_Utilities::get_template_parts( array( 'footer','html_footer') ); ?>