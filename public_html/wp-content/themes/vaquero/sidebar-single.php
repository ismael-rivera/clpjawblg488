<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<aside>
	<ul>	
		<li>
			<div id="cluster-003" class="cluster">
				<ul id="adlist-005" class="otf-list">
					<li class="otf-item-wide"><a href="" class="otf-large-rectangle"></a></li>
				</ul>	
			</div>
		</li>
		<li>
			<div id="cluster-004" class="cluster">
				<ul id="adlist-006" class="otf-list">
					<li class="otf-item-wide"><a href="" class="otf-large-rectangle"></a></li>
					<li class="otf-item-wide"><a href="" class="otf-large-rectangle"></a></li>
					<li class="otf-item-wide"><a href="" class="otf-large-rectangle"></a></li>
					<li class="otf-item-wide"><a href="" class="otf-large-rectangle"></a></li>
				</ul>	
			</div>
		</li>
	<ul>
	<ul>		
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	/*if ( ! dynamic_sidebar( 'tertiary-widget-area' ) ) : ?>
	
			<li>
				<?php get_search_form(); ?>
			</li>

			<li>
				<h3><?php _e( 'Archives', 'starkers' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li>
				<h3><?php _e( 'Meta', 'starkers' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area */?>
		</ul>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'quaternary-widget-area' ) ) : ?>

			<ul>
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>

<?php endif; ?>
	
	</aside>