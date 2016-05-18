<?php Starkers_Utilities::get_template_parts( array( 'html_header', 'header-post' ) ); ?>
<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<div class="spacer"></div> 
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
<div id="page-section" class="container">
        <div class="row">
              <div id="content" class="col-sm-10">
			 <?php the_post(); ?>
<article>
<header>
<?php echo "<h1>" . get_the_title() . "</h1>"; ?>
</header>
<?php the_content();?>
</article>
</div>
<div id="content" class="col-sm-2"></div>

</div>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<div class="spacer"></div> 
<?php get_sidebar(); ?>
<?php Starkers_Utilities::get_template_parts( array( 'footer','html_footer') ); ?>
