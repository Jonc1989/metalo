<?php
/*
Sale POST TYPE
 */
add_action('init', 'sale_register');
/**
 * Register a event post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function sale_register() {
	$labels = array(
		'name'               => 'Izpārdošana',
		'singular_name'      => 'Izpārdošana',
		'add_new'            => 'Pievienot produktu',
		'add_new_item'       => 'Pievienot jaunu produktu',
		'edit_item'          => 'Rediģēt produktu',
		'new_item'           => 'Jauns produkts',
		'view_item'          => 'Skatīt produktu',
		'search_items'       => 'Meklēt produktus',
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
		'rewrite'            => array( 'slug' => 'sale' ),
		'capability_type'    => 'post',
		'hierarchical'       => true,
		'menu_position'      => 45,
		'taxonomies'  => array( 'category' ),
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'sale' , $args );

}