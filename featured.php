    <div id="featured" class="container fborder">
      <!-- Example row of columns -->
      <div class="row">
        <div id="feat1" class="col-sm-4">

          <?php $post_id = $postid[0];
                $queried_post = get_post($post_id);
                $title = $queried_post->post_title;
                echo "<h2>".$title."</h2>";
                echo $queried_post->post_content; ?>
          
        <p><a class="btn btn-default" href="http://getbootstrap.com/examples/jumbotron/#" role="button">View details »</a></p>

        </div>
        <div class="col-sm-8 lborder">
      
      <div class="row">
        <div id="feat2" class="col-sm-12">  
          
          <?php $post_id = $postid[1];
                $queried_post = get_post($post_id);
                $title = $queried_post->post_title;
                echo "<h2>".$title."</h2>";
                echo $queried_post->post_content; ?>

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