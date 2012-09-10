<?php
/**
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */


$issue = wp_get_post_terms($post->ID, 'issue', array("fields" => "ids"));

$issue = $issue[0];

$args = array(
	'tax_query' => array(
		array(
			'taxonomy' => 'issue',
			'field' => 'id',
			'terms' => $issue
		),
	),
	'post_type' => array('post', '-newspaper'),
	'posts_per_page' => '-1'
);

$articles = new WP_Query( $args );

get_header();
?>

		<div id="primary">
			<div id="content" role="main">
				
				<?php if ($articles->have_posts()) : ?>
				
					<?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
	
						<?php get_template_part( 'content', 'zeitungpage' ); ?>
	
					<?php endwhile; // end of the loop. ?>
				
				<?php else : ?>
				
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
	
				<?php endif; ?>
				
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>