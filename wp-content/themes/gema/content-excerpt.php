<?php
/**
 * The template for displaying page content in the showcase.php page template
 *
 * @package WordPress
 * @subpackage gema
 * @since Twenty Eleven 1.0
 */
?>

<div class="main-post-outside clearfix">
	<?php the_post_thumbnail('thumbnail'); ?>
	<div class="main-post-content">
		<a href="<?php the_permalink();Ê?>" class="main-post-title"><?php the_title();Ê?></a>
		<?php the_excerpt(); ?>
	</div>
</div>