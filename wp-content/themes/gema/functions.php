<?php
function taxonomy_issue_init() {
	// create a new taxonomy
	register_taxonomy(
		'issue',
		'post',
		array(
			'label' => __( 'Issue' ),
			'sort' => true,
			'args' => array( 'orderby' => 'term_order' ),
			'rewrite' => array( 'slug' => 'issue' ),
			'hierarchical' => false,
		)
	);
}

add_action( 'init', 'taxonomy_issue_init' );