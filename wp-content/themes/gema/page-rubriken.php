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
	$sections = get_categories(array('hide_empty' => 0, 'parent' => 24));
	$home = home_url();
?>

		<div id="primary" class="sections-page">
			<div id="content" role="main" class="custom-page-content">
					<?php foreach($sections as $category): ?>
						<a href="<?php echo($home . "/rubrik/" . $category->slug); ?>">
							<div class="rubrik-container">
								<div class="rubrik-logo rubrik-logo-<?php echo($category->slug); ?>"></div>
								<div><p><?php echo($category->name);?></p></div>
							</div>
							
						</a>
					<?php endforeach; ?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>