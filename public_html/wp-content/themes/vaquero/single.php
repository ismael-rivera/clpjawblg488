<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'global/html-header', 'global/header' ) ); ?>
<?php Section_Builder::sec_Begins(); ?> 
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
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


            <div class="row header-row">
                <div class="col-lg-6"> 
                    <h2>Latest Posts</h2> 
                </div>
                <div class="col-lg-6"></div>
            </div>    
            <div class="row">
                <div class="col-lg-8 equal_height padding-combo-1">
                   <article>

						<h2><?php the_title(); ?></h2>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
						<?php the_content(); ?>			

						<?php if ( get_the_author_meta( 'description' ) ) : ?>
						<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
						<h3>About <?php echo get_the_author() ; ?></h3>
						<?php the_author_meta( 'description' ); ?>
						<?php endif; ?>

						<?php comments_template( '', true ); ?>

					</article>
                </div> <!-- End of col-lg-8 -->
            <div class="col-lg-4 side-right equal_height padding-combo-1">
                       <?php get_sidebar("single"); ?>          
            </div>     
            </div>

<?php endwhile; ?>
<?php Section_Builder::sec_Ends(); ?> 
<?php Starkers_Utilities::get_template_parts( array( 'global/footer','global/html-footer' ) ); ?>