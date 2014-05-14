<?php
/**
 * The Template for displaying 404 page.
 *
 * @package Feather
 */

get_header(); ?>

<div class="wrap container" role="document">
	<div class="content row">

		<main class="main col-sm-8" role="main">

			<?php get_template_part('templates/page', 'header'); ?>

			<div class="alert alert-warning">
				<?php _e('Sorry, but the page you were trying to view does not exist.', 'roots'); ?>
			</div>

			<p><?php _e('It looks like this was the result of either:', 'roots'); ?></p>
			<ul>
				<li><?php _e('a mistyped address', 'roots'); ?></li>
				<li><?php _e('an out-of-date link', 'roots'); ?></li>
			</ul>

			<?php get_search_form(); ?>

		</main><!--/ .main -->

		<aside class="sidebar col-sm-4" role="complementary">
			<?php get_sidebar(); ?>
		</aside><!--/ .sidebar -->

	</div><!--/ .content .row -->
</div><!--/ .wrap .container -->

<?php get_footer(); ?>
