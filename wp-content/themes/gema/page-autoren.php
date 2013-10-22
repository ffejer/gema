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
				
					//$users = get_users( array('role' => 'author', 'fields' => 'all_with_meta') );
					
					$user_manifest = array();
					
					foreach ($authors as $author)
					{
						$user_manifest[] = get_userdata($author);
					}
					
					$posts_belonging_to_users = array();
										
					$posts = get_posts(array('posts_per_page' => '-1'));
					
					foreach ($posts as $single_post)
					{
						$author_info = get_coauthors($single_post->ID);
						foreach ($author_info as $author)
						{
							$posts_belonging_to_users[$author->ID][] = $single_post;
						}
						
					}
					/*echo "<pre>";
					print_r($posts_belonging_to_users);
					echo "</pre>";*/

                    $initial_char = "";

                    print("<ul class='authors'>");
					foreach($user_manifest as $user)
					{
                        if(count($posts_belonging_to_users[$user->ID]) == 0)
                        {
                            continue;
                        }

                        $curr_initial = mb_substr($user->last_name, 0, 1);
                        if ($initial_char != $curr_initial) {
                            if($initial_char != "")
                                print("</li></ul>");

                            $initial_char = $curr_initial;
                            printf("<li><span>%s</span><ul>", $curr_initial);
                        }

                        printf("<li><span>%s %s</span><ul>", $user->first_name, $user->last_name);
						foreach($posts_belonging_to_users[$user->ID] as $post_of_user)
						{
						 	printf("<li><a href=\"%s\">%s</a></li>", get_permalink($post_of_user->ID), $post_of_user->post_title);
						}
                        print("</ul></li>");
					}
                    print("</ul></li><ul>");
				?>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>