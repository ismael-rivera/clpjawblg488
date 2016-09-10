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
<div id="front-page" class="container fborder">
    `       <div class="row header-row">
                <div class="col-lg-2"><a href="" class="otf-rectangle"></a></div>
                <div class="col-lg-8">
                    <a href=""><h1 class="td-headline-semi-big">Once Again Trump Gets Caught</h1></a>
                </div>
                <div class="col-lg-2"><a href="" class="otf-rectangle"></a></div>
            </div>
</div>
<!-- <?php //Starkers_Utilities::get_template_parts( array( 'json/idea-bubble' )); ?> -->
 <div id="latest-posts" class="container fborder">
            <div class="row header-row">
                <div class="col-lg-6"> 
                    <h2>Latest Posts</h2> 
                </div>
                <div class="col-lg-6"></div>
            </div>    
            <div class="row">
                <div class="col-lg-8 equal_height padding-combo-1">
                    <div class="row">
                        <div class="col-lg-12">
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
                                    <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                    <?php echo excerpt(30); ?>
                                </div>
                            </div>       
                            <?php endwhile; ?>
                        <!-- End of the main loop -->
                            <?php else: ?>
                            <h2>No posts to display</h2>
                            <?php endif; ?>
                        </div>
                    </div> 
                </div>       
                <div class="col-lg-4 side-right equal_height padding-combo-1">
                    <?php get_sidebar(); ?>  
                </div> 
            </div>          
</div>
<!-- <?php //Starkers_Utilities::get_template_parts( array( 'json/articles' )); ?> -->
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
            <!-- Add the pagination functions here. -->
            <div class="pagenavi row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6"><?php wp_pagenavi(); ?></div>
                <div class="col-lg-3"></div>
            </div>
        </div>

<!-- **************************************************************************************** -->


<?php Starkers_Utilities::get_template_parts( array( 'global/footer','global/html-footer') ); ?>    