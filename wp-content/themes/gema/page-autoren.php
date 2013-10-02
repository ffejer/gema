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
					
				<?php
				$authors = $wpdb->get_col(
				    "SELECT um2.user_id
				    FROM {$wpdb->usermeta} um1
				    LEFT JOIN {$wpdb->usermeta} um2
				         ON um1.user_id = um2.user_id
				    WHERE um1.meta_key = 'wp_user_level'
				    AND um1.meta_value = '2'
				    AND um2.meta_key = 'last_name'
				    ORDER by um2.meta_value ASC"
				);
				
					$users = get_users( array('role' => 'author', 'fields' => 'all_with_meta') );
					
					foreach ($authors as $author) {
						
						$user_info = get_userdata($author);
						  $first_name = $user_info->user_firstname;
					      $last_name = $user_info->user_lastname;
					    
						echo "$first_name $last_name";
					}
					
					$posts = get_posts();
					
					foreach ($posts as $post)
					{
						echo "<pre>";
						print_r(get_coauthors($post->ID));
						echo "</pre>";
					}
					
				?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>