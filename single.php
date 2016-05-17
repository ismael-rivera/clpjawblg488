<?php Starkers_Utilities::get_template_parts( array( 'html_header', 'header-post' ) ); ?>
<?php
/**
* @package WordPress
* @subpackage Default_Theme
*/
?>
<div class="spacer"></div> 
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
      <div class="row">
            <div class="col-lg-12">
              <div class="<?php post_class(); ?> blog-header" id="post-<?php the_ID(); ?>">
                <h1 class="blog-post-title"><?php the_title(); ?></h1>
              </div>
            </div>    
      </div>
      <div class="row">
            <div class="col-lg-8">
              <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
              <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
              <?php comments_template(); ?>
              <?php endwhile; else: ?>              
              <p>Sorry, no posts matched your criteria.</p>
              <?php endif; ?>
            </div>
            <div class="col-lg-2">                             
              <?php get_sidebar(); ?>
            </div>
      </div>       

</div> 
<div class="spacer"></div> 
<?php Starkers_Utilities::get_template_parts( array( 'footer','html_footer') ); ?>