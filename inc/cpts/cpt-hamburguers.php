<?php

/**
CPT - Hamburguers
**/

add_action( 'init', 'type_post_hamburguers' );

function type_post_hamburguers() {
	$labels = array(
		'name' => _x( 'Hamburguers', 'post type general name', 'hellsburguer' ),
		'singular_name' => _x( 'Hamburguer', 'post type singular name', 'hellsburguer' ),
		'add_new' => _x( 'Add New', 'Novo item', 'hellsburguer' ),
		'add_new_item' => __( 'New Item', 'hellsburguer' ),
		'edit_item' => __( 'Edit Item', 'hellsburguer' ),
		'new_item' => __( 'New Item', 'hellsburguer' ),
		'view_item' => __( 'See Item', 'hellsburguer' ),
		'search_items' => __( 'Search Itens', 'hellsburguer' ),
		'not_found' =>  __( 'No record found', 'hellsburguer' ),
		'not_found_in_trash' => __( 'Nenhum registro encontrado na lixeira', 'hellsburguer' ),
		'parent_item_colon' => '',
		'menu_name' => _x( 'Hamburguers', 'menu name' , 'hellsburguer' )
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-food',
		'menu_position' => null,
		'show_in_rest' => true,
		'map_meta_cap' => true,
		'supports' => array( 'title', 'editor', 'revisions' )
	);

	register_post_type( 'hamburguers' , $args );
	flush_rewrite_rules();
}
