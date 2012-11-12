<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php if(function_exists('social_ring_show')){ social_ring_show();} ?>
		
		<h2>
			<?php
				$i = new CoAuthorsIterator();
				
				if($i->count() > 0)
				{					
					print $i->count() == 1 ? 'Autor: ' : 'Autoren: ';
					$author_utility_text = '<a href="%3$s">%1$s %2$s</a>';
					
					$i->iterate();
					
					printf($author_utility_text,
						get_the_author_meta( 'first_name' ),
						get_the_author_meta( 'last_name' ),
						esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ));
					
					while($i->iterate()){
						print $i->is_last() ? ' und ' : ', ';
						printf($author_utility_text,
							get_the_author_meta( 'first_name' ),
							get_the_author_meta( 'last_name' ),
							esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ));
					}
				}
			?>
		</h2>
		<?php 
			$issue = array();
			$section = array();
			
			$categories = get_the_category();
			
			foreach ($categories as $category)
			{
				if($category->parent == GEMA_CATEGORY_ID_SECTION)
				{
					$section[] = sprintf('<a href="%2$s">%1$s</a>', $category->name, esc_url(get_category_link($category->term_id)));
				}
				else if($category->parent == GEMA_CATEGORY_ID_ISSUE)
				{
					$issue[] = sprintf('<a href="%2$s">%1$s</a>', $category->name, esc_url(get_category_link($category->term_id)));
				}
			}
		?>
		
		<?php if(count($issue) > 0): ?>
		<h2>
			Zeitung: <?php echo(implode(', ', $issue)) ?>
		</h2>
		<?php endif; ?>
		
		<?php if(count($section) > 0): ?>
		<h2>
			<?php print count($section) == 1 ? 'Rubrik: ' : 'Rubriken: '; echo(implode(', ', $section)) ?>
		</h2>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
			);
		?>
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( get_the_author_meta( 'description' ) && ( ! function_exists( 'is_multi_author' ) || is_multi_author() ) ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
		<div id="author-info">
			<div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 68 ) ); ?>
			</div><!-- #author-avatar -->
			<div id="author-description">
				<h2><?php printf( __( 'About %s', 'twentyeleven' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
				<div id="author-link">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
						<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyeleven' ), get_the_author() ); ?>
					</a>
				</div><!-- #author-link	-->
			</div><!-- #author-description -->
		</div><!-- #entry-author-info -->
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
