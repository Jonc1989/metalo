<?php
/*
Services POST TYPE
 */
add_action('init', 'services_register');
/**
 * Register a event post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function services_register() {
	$labels = array(
		'name'               => 'Pakalpojumi',
		'singular_name'      => 'Pakalpojums',
		'add_new'            => 'Pievienot pakalpojumu',
		'add_new_item'       => 'Pievienot jaunu pakalpojumu',
		'edit_item'          => 'Rediģēt pakalpojumu',
		'new_item'           => 'Jauns pakalpojums',
		'view_item'          => 'Skatīt pakalpojumu',
		'search_items'       => 'Meklēt pakalpojumu',
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
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'hierarchical'       => true,
		'menu_position'      => 42,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'services' , $args );

}