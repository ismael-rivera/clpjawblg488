<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external library files
	
	======================================================================================================================== */

	require_once( 'xlibs/starkers-utilities.php' );
	require_once( 'xlibs/section_builder.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(240,150, true);
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */


	////////////////////////////////////////////////////////////////////
	// Register the Sidebar(s)
	////////////////////////////////////////////////////////////////////

	        // Area 1, located at the top of the sidebar.
			register_sidebar( array(
				'name' => __( 'Primary Widget Area', 'starkers' ),
				'id' => 'primary-widget-area',
				'description' => __( 'The primary widget area', 'starkers' ),
				'before_widget' => '<li>',
				'after_widget' => '</li>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			) );
			// Area 2, located at the top of the sidebar.
			register_sidebar( array(
				'name' => __( 'Secondary Widget Area', 'starkers' ),
				'id' => 'secondary-widget-area',
				'description' => __( 'The secondary widget area', 'starkers' ),
				'before_widget' => '<li>',
				'after_widget' => '</li>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			) );
			// Area 3, located at the top of the sidebar.
			register_sidebar( array(
				'name' => __( 'Tertiary Widget Area', 'starkers' ),
				'id' => 'tertiary-widget-area',
				'description' => __( 'The tertiary widget area', 'starkers' ),
				'before_widget' => '<li>',
				'after_widget' => '</li>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			) );
			// Area 4, located at the top of the sidebar.
			register_sidebar( array(
				'name' => __( 'Quaternary Widget Area', 'starkers' ),
				'id' => 'quaternary-widget-area',
				'description' => __( 'The quaternary widget area', 'starkers' ),
				'before_widget' => '<li>',
				'after_widget' => '</li>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			) );


	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		/*wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );*/

		wp_register_style( 'style', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'style' );
        wp_register_style( 'fonts', get_stylesheet_directory_uri().'/assets/fonts/fonts.css', '', '', 'screen' );
        wp_enqueue_style( 'fonts' );
        wp_register_style( 'main', get_stylesheet_directory_uri().'/assets/css/main.css', '', '', 'screen' );
        wp_enqueue_style( 'main' );
        wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.css', '', '', 'screen' );
        wp_enqueue_style( 'bootstrap' );
        wp_register_style( '125ads', get_stylesheet_directory_uri().'/assets/css/125ads.css', '', '', 'screen' );
        wp_enqueue_style( '125ads' );
       
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}

	function excerpt($limit) {
	  $excerpt = explode(' ', get_the_excerpt(), $limit);
	  if (count($excerpt)>=$limit) {
	    array_pop($excerpt);
	    $excerpt = implode(" ",$excerpt).'...';
	  } else {
	    $excerpt = implode(" ",$excerpt);
	  }	
	  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
      return $excerpt;
	}
	 
	function content($limit) {
	  $content = explode(' ', get_the_content(), $limit);
	  if (count($content)>=$limit) {
	    array_pop($content);
	    $content = implode(" ",$content).'...';
	  } else {
	    $content = implode(" ",$content);
	  }	
	  $content = preg_replace('/[.+]/','', $content);
	  $content = apply_filters('the_content', $content); 
	  $content = str_replace(']]>', ']]&gt;', $content);
	  return $content;
	}


// function autoblank($text) { 
// 	$out = str_replace('<a', '<a target="_blank"', $text);
//     return $out;
// } 
// add_filter('the_content','autoblank');
