<?php Starkers_Utilities::get_template_parts( array( 'html_header', 'header-post' ) ); ?>
<?php
/**
* @package WordPress
* @subpackage Default_Theme
*/
?>

 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8"><div class="single-post-ad"></div></div>
        <div class="col-lg-2"></div>
      </div>
      <div class="row">
            <div class="single-title-row col-lg-12">
              <div class="<?php post_class(); ?> blog-header" id="post-<?php the_ID(); ?>">
                <h1 class="blog-post-title"><?php the_title(); ?></h1>
                <h4 class="blog-post-subheader">Amazing 360 degree on this video</h4>
              </div>
            </div>     
      </div>
      <div class="row">
            <div class="col-lg-8">
              <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
              <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
              <div class="single-post-ad"></div>
              <?php comments_template(); ?>
              <?php endwhile; else: ?>              
              <p>Sorry, no posts matched your criteria.</p>
              <?php endif; ?>
            </div>
            <div class="col-lg-4 sidebar-right">
                <div class="row">
                    <div class="col-sm-12 big-square-ad">Big Ad 1</div>
                </div>
                <div class="row">
                    <div class="col-sm-12 big-square-ad">Big Ad 2</div>
                </div>
                <div class="row">
                    <div class="col-sm-6 square-ad">HELLO</div>
                    <div class="col-sm-6 square-ad">WORJEHWWJSIK</div>
                </div>
                <div class="row">
                    <div class="col-sm-6 square-ad">HELLO</div>
                    <div class="col-sm-6 square-ad">WORJEHWWJSIK</div>
                </div>
                <div class="row">
                    <div class="col-sm-12"><?php get_sidebar(); ?></div>
                </div>     
            </div>
      </div>
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8"><div class="single-post-ad"></div></div>
        <div class="col-lg-2"></div>
      </div>       

</div> 
<div class="spacer"></div> 
<?php Starkers_Utilities::get_template_parts( array( 'footer','html_footer') ); ?>