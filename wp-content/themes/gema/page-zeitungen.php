<?php
/**
 *
 * @package WordPress
 * @subpackage gema
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main" class="custom-page-content">

			<?php $issues = get_categories(array('parent' => GEMA_CATEGORY_ID_ISSUE)); ?>
			<?php if ( count($issues) > 0 ) : ?>

				<?php
					twentyeleven_content_nav( 'nav-above' );
					$count = 0;
				?>

				<?php /* Start the Loop */ ?>
				<?php foreach ( $issues as $issue ) : ?>
					<?php $colour = $count%13; ?>
					<a href="<?php echo(esc_url(get_category_link($issue->term_id))); ?>"><div class="zeitung-logo zeitung-logo-color-<?php echo($colour); ?>">
						<span><?php echo($issue->name); ?></span>
					</div>
					</a>
					<?php $count++; ?>
				<?php endforeach; ?>

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