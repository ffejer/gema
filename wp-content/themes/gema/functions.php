<?php
function taxonomy_issue_init() {
	register_taxonomy(
		'issue',
		'post',
		array(
			'label' => __( 'Issue' ),
			'sort' => true,
			'args' => array( 'orderby' => 'term_order' ),
			'rewrite' => array( 'slug' => 'heft' ),
			'hierarchical' => false,
		)
	);
}

function taxonomy_author_init() {
	register_taxonomy(
		'author',
		'post',
		array(
			'label' => __( 'Author' ),
			'sort' => true,
			'args' => array( 'orderby' => 'term_order' ),
			'rewrite' => array( 'slug' => 'autor' ),
			'hierarchical' => false,
		)
	);
}

add_action( 'init', 'taxonomy_issue_init' );
add_action( 'init', 'taxonomy_author_init' );

/**
 * Function used to calculate the Issue(s) the post belongs to.
 * 
 * @param post id
 */
function gema_post_belongs_to_issue($id)
{
	$issues = get_the_terms($id, 'issue');
	
	if(!$issues)
	{
		return "";
	}
	
	$template = "<a href='/issue/%s'>%s</a>";
	
	$links = array();
	
	foreach ($issues as $issue)
	{
		$links[] = sprintf($template, $issue->slug, $issue->name);
	}
	
	return _e('Issue ', 'gema') . implode(", ", $links);
}