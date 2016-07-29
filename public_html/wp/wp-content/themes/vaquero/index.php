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

        <div class="container">
            <!-- <div class="row">
              <div class="col-lg-12">
                <h3>Just so you know...:</h3>
                <p>There used to be a few people working to find this websites direction. Now there is only one. Please be gentle, as I try my best to get
                   some decent articles up in this mamma jamma. Basically, I'm stuck with all the work now. Yay!! Good news is this website is all mine now
                   and since I paid for it anyways I might as well run it the way I want without any meetings, memos, emails, or editor whathaveyous. Since this website
                   is literally brandspanking new and there is probably no one reading this right now (or is there?), I doubt there will be much fuzz about how I run it.
                   Besides, I am, at this point, of the opinion that artistic vulnerability makes for far better expression than salesmanship in the pursuit of exposure.</p> 
                <p>Or not. Either way, I could give a shit. I'm doing this.</p>
              </div>
              <div class="col-lg-12">
                <h3>Workspace Station:</h3>
                <p>This is a wall of things I like, read and use while I am working on my own content.</p>
              </div>
            </div>  -->
            <div class="row header-row">
                <div class="col-lg-6"> 
                    <h2>Latest Posts</h2> 
                </div>
                <div class="col-lg-6"></div>
            </div>        
            <div class="row">
                <div class="col-lg-6 equal_height padding-combo-1">
                    <?php if ( have_posts() ): ?>
     <?php while ( have_posts() ) : the_post(); ?>  
                    <article>
                        <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                         <?php echo excerpt(30); ?>
                    </article>    
    <?php endwhile; ?>
    <?php else: ?>
    <h2>No posts to display</h2>
    <?php endif; ?>
                </div> 
                <div class="col-lg-6 side-right equal_height padding-combo-1">hgfhgfEsse molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros et? Veniam quis nostrud exerci tation ullamcorper suscipit lobortis, nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim duis autem vel eum iriure. Ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut.

Et accumsan et iusto odio dignissim qui blandit praesent? Feugiat nulla facilisis at vero eros luptatum zzril delenit augue duis dolore te. Imperdiet doming id quod mazim placerat facer possim assum typi non habent.

Imperdiet doming id quod mazim placerat facer possim assum typi non habent claritatem insitam est usus. Lectores legere me lius quod ii; legunt saepius claritas est etiam processus dynamicus qui sequitur mutationem. Iis qui facit eorum claritatem Investigationes demonstraverunt consuetudium lectorum mirum est notare quam littera. Nunc putamus parum claram anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima eodem. Vel illum dolore eu feugiat nulla facilisis at vero eros et? Nam liber tempor cum soluta nobis eleifend option. Ut laoreet dolore magna aliquam erat volutpat ut wisi enim. Qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi congue nihil.

Imperdiet doming id quod mazim placerat facer possim. Magna aliquam erat volutpat ut wisi, enim ad minim veniam. Adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet.

Decima eodem modo typi qui nunc nobis videntur parum clari fiant sollemnes in. Adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore: magna aliquam erat. Quam nunc putamus parum claram anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta. Iriure dolor in hendrerit in vulputate, velit esse molestie! Luptatum zzril delenit augue duis dolore te, feugait nulla facilisi nam? Etiam processus dynamicus qui sequitur mutationem consuetudium lectorum mirum est notare quam. Est usus legentis in iis qui facit eorum claritatem Investigationes demonstraverunt lectores legere me! Assum typi non habent claritatem insitam lius quod ii legunt saepius claritas est littera gothica!

Quam littera gothica quam nunc putamus parum claram anteposuerit. Notare litterarum formas humanitatis per seacula quarta decima et.

Laoreet dolore magna aliquam erat volutpat ut wisi enim. Accumsan et iusto odio dignissim qui blandit praesent luptatum? Adipiscing elit sed diam nonummy nibh euismod tincidunt ut ad minim veniam quis? Quarta decima et quinta decima eodem; modo typi qui. Dynamicus qui sequitur mutationem consuetudium lectorum mirum est notare quam littera, gothica quam nunc. Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea.

Non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem Investigationes demonstraverunt. Cum soluta nobis eleifend option congue nihil imperdiet doming id quod? Iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore. Volutpat ut wisi enim ad minim veniam quis nostrud exerci tation ullamcorper.

Duis dolore te feugait nulla, facilisi nam liber tempor cum soluta nobis eleifend option congue. Nisl ut aliquip, ex ea commodo consequat duis autem vel? Iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore. Enim ad minim veniam quis nostrud exerci tation ullamcorper suscipit lobortis eum eu feugiat nulla facilisis. Magna aliquam erat volutpat ut wisi at vero eros et accumsan et iusto odio? Processus dynamicus qui sequitur mutationem consuetudium; lectorum mirum est notare quam littera gothica. Typi qui nunc nobis videntur parum clari fiant sollemnes in.

Dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore. Magna aliquam erat volutpat ut wisi enim ad minim veniam. Decima et quinta decima eodem modo typi qui nunc nobis videntur parum clari fiant sollemnes in. Insitam est usus legentis in iis qui facit eorum claritatem Investigationes demonstraverunt. Parum claram anteposuerit litterarum formas humanitatis per seacula quarta. Typi non habent claritatem lectores legere me lius quod ii legunt saepius.
</div>     
            </div> 
    </div>
    <div id="idea-bubble" class="container">
            <div class="row header-row">
                <div class="col-lg-12"><h3>What I've Been Surfing On</h3></div>
            </div>
            <div class="row padding-combo-2">
                
                    
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
                    <div class="col-lg-3">
                        <article class="grid-item <?php echo $catgr ?>">
                            <a class="item-image" href="<?php echo $href ?>">
                                <img class="img-responsive" src="<?php echo $image ?>" alt="<?php echo $title ?>" onerror="imgError(this);" />
                                <h4 class="item-title-link"><?php echo $title ?></h4>
                            </a>           
                        </article>
                    </div>
                    <?php  $i --;  } ?>


                    
                
            </div>
        </div>

<?php Starkers_Utilities::get_template_parts( array( 'global/footer','global/html-footer') ); ?>    