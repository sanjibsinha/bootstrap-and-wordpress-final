<?php

function fetch_code_two_files() {
    
    wp_enqueue_style('code_one_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'fetch_code_two_files');

apply_filters( 'excerpt_length', 8 );

add_theme_support('post-thumbnails');



// Book custom post item

add_action( 'init', 'sinha_book_init' );

function sinha_book_init() {
	$labels = array(
		'name'               => _x( 'Books', 'post type general name', 'book' ),
		'singular_name'      => _x( 'Book', 'post type singular name', 'book' ),
		'menu_name'          => _x( 'Books', 'admin menu', 'book' ),
		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'book' ),
		'add_new'            => _x( 'Add New', 'book', 'book' ),
		'add_new_item'       => __( 'Add New Book', 'book' ),
		'new_item'           => __( 'New Book', 'book' ),
		'edit_item'          => __( 'Edit Book', 'book' ),
		'view_item'          => __( 'View Book', 'book' ),
		'all_items'          => __( 'All Books', 'book' ),
		'search_items'       => __( 'Search Books', 'book' ),
		'parent_item_colon'  => __( 'Parent Books:', 'book' ),
		'not_found'          => __( 'No books found.', 'book' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'book' )
		
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'book' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'taxonomies'         => array( 'category', 'post_tag' )
		
	);

	register_post_type( 'book', $args );
}



     