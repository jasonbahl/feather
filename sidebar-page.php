<?php
/**
 * Sidebar for 2 column page templates
 *
 * @package Feather
 */
?>
<div id="secondary" class="sidebar-page widget-area" role="complementary">
	<?php if ( ! dynamic_sidebar( 'sidebar-page' ) ) : ?>

		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>

	<?php endif; // end sidebar widget area ?>
</div><!-- #secondary -->
