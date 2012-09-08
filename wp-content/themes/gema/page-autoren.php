<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage gema
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<ul>
					<?php foreach($terms = get_terms("author") as $category): ?>
						<li><?php printf("%s (%d)", $category->name, $category->count);?></li>
					<?php endforeach; ?>
				</ul>			
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>