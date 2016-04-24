<?php Starkers_Utilities::get_template_parts( array( 'html_header', 'header' ) ); ?>
    <?php 
    // $args = array( 'posts_per_page' => 4, 'category_name' => 'featured' );
    //       $i = 0; $feat = array(); $postslist = get_posts( $args );
    //       foreach ( $postslist as $post ) : setup_postdata( $post ); 
    //               $postid[$i] = get_the_ID(); $i++; endforeach; 
    //       wp_reset_postdata(); 
    ?>

    <div class="spacer"></div> 

    <div id="sidebar-toggle" class="container">
      <div class="row">
        <div class="col-xs-3 red s-togl">
          <button type="button">Left</button>  
        </div>          
        <div class="col-xs-6 red s-togl">SIDEBAR TOGGLES</div>
        <div class="col-xs-3 red s-togl">
          <button type="button">Left</button>  
        </div> 
      </div>
    </div>

    <div id="content-section" class="container fborder">
        <div class="row">
              <div id="content" class="col-sm-12 rborder">
<?php get_template_part('thegrid'); ?>


                

            </div>
        </div> 
    </div>

    <div class="spacer"></div> 

    <!-- <div id="ads" class="container">
      <div class="col-sm-4 fborder">ads</div>
      <div class="col-sm-4 fborder">ads</div>
      <div class="col-sm-4 fborder">ads</div>
    </div> -->

    <div class="spacer"></div> 
</div>
<?php Starkers_Utilities::get_template_parts( array( 'footer','html_footer') ); ?>