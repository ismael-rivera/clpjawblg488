  <div class="col-lg-2 sidebar">
    <div class="row">
          <div class="col-sm-12 vertical-ad">Big Ad 1</div>
    </div>
  </div>
  <div class="col-lg-6">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row post">
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="col-lg-4">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail('thumbnail'); ?>
          </a>
        </div>
        <div class="col-lg-8">
          <h2><a class="entry-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <div class="entry"><?php the_excerpt(); ?></div>
        </div>
        <?php } else { ?>
        <div class="col-lg-12">
          <h2><a class="entry-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <div class="entry">
            <?php the_excerpt(); ?>
          </div>
        </div>
      <?php };?>
  </div>

 <?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
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

 



 
