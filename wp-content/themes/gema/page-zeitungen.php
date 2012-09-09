<?php
/**
 *
 * @package WordPress
 * @subpackage gema
 * @since Twenty Eleven 1.0
 */

$newspapers = new WP_Query('post_type=newspaper&posts_per_page=-1');

get_header(); ?>

		<div id="primary">
			<div id="content" role="main" class="custom-page-content">

			<?php if ( $newspapers->have_posts() ) : ?>

				<?php
					twentyeleven_content_nav( 'nav-above' );
					$count = 0;
				?>

				<?php /* Start the Loop */ ?>
				<?php while ( $newspapers->have_posts() ) : $newspapers->the_post(); ?>
					<?php $colour = $count%13; ?>
					<a href="<?php echo get_permalink(); ?>"><div class="zeitung-logo zeitung-logo-color-<?php echo($colour); ?>">
						<span><?php the_title(); ?></span>
					</div>
					</a>
					<?php $count++;Ê?>
				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->
<?php get_footer(); ?>