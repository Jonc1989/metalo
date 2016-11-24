<?php
/*
Products POST TYPE
 */
add_action('init', 'gallery_register');
/**
 * Register a event post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function gallery_register() {
	$labels = array(
		'name'               => 'Galerija',
		'singular_name'      => 'Galerija',
		'add_new'            => 'Pievienot attēlu',
		'add_new_item'       => 'Pievienot jaunu attēlu',
		'edit_item'          => 'Rediģēt attēlu',
		'new_item'           => 'Jauna attēls',
		'view_item'          => 'Skatīt attēlu',
		'search_items'       => 'Meklēt attēlu',
		'not_found'          => 'Nekas netika attrasts',
		'not_found_in_trash' => 'Miskastē nekas netika attrasts',
		'parent_item_colon'  => ''
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gallery' ),
		'capability_type'    => 'post',
		'hierarchical'       => true,
		'menu_position'      => 42,
		'supports'           => array( 'title', 'thumbnail')
	);

	register_post_type( 'gallery' , $args );

}