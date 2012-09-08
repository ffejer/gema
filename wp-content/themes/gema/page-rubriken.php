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

<?php
	$sections = get_categories(array('hide_empty' => 0, 'parent' => 25));
	$home = home_url();
?>

		<div id="primary" class="sections-page">
			<div id="content" role="main">
				<ul style="list-style: none;">
					<?php foreach($sections as $category): ?>
						<li><a href="<?php echo($home . "/Rubrik/" . $category->slug); ?>" class="section-anchor"><?php echo($category->name);?></a> (<?php echo($category->count) ?>)</li>
					<?php endforeach; ?>
				</ul>			
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>