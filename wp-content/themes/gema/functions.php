<?php

define(GEMA_CATEGORY_ID_ISSUE, 59);
define(GEMA_CATEGORY_ID_SECTION, 24);
define(GEMA_USERS_EXCLUDE, serialize(array(1, 84)));

function gema_init()
{
	
	/* enabling translation */
	load_theme_textdomain( 'twentyeleven', get_template_directory() . '/languages' );
	
	modify_slugs();
	
	add_theme_support('post-thumbnails');
}

function modify_slugs() {
	global $wp_rewrite;
    $wp_rewrite->author_base        = 'autor';
    $wp_rewrite->search_base        = 'suchen';
    $wp_rewrite->comments_base      = 'kommentare';
    $wp_rewrite->pagination_base    = 'seite';
    $wp_rewrite->category_base      = 'kategorie';
    $wp_rewrite->flush_rules();
	
}

add_action('init', 'gema_init');