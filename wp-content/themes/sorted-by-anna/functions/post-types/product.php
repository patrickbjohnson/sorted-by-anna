<?php

function product_init() {
	register_post_type( 'product', array(
		'labels'            => array(
			'name'                => __( 'Products', 'YOUR-TEXTDOMAIN' ),
			'singular_name'       => __( 'Product', 'YOUR-TEXTDOMAIN' ),
			'all_items'           => __( 'All Products', 'YOUR-TEXTDOMAIN' ),
			'new_item'            => __( 'New Product', 'YOUR-TEXTDOMAIN' ),
			'add_new'             => __( 'Add New', 'YOUR-TEXTDOMAIN' ),
			'add_new_item'        => __( 'Add New Product', 'YOUR-TEXTDOMAIN' ),
			'edit_item'           => __( 'Edit Product', 'YOUR-TEXTDOMAIN' ),
			'view_item'           => __( 'View Product', 'YOUR-TEXTDOMAIN' ),
			'search_items'        => __( 'Search Products', 'YOUR-TEXTDOMAIN' ),
			'not_found'           => __( 'No Products found', 'YOUR-TEXTDOMAIN' ),
			'not_found_in_trash'  => __( 'No Products found in trash', 'YOUR-TEXTDOMAIN' ),
			'parent_item_colon'   => __( 'Parent product', 'YOUR-TEXTDOMAIN' ),
			'menu_name'           => __( 'Products', 'YOUR-TEXTDOMAIN' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'thumbnail' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-post',
		'show_in_rest'      => true,
		'rest_base'         => 'product',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'product_init' );

function product_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['product'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Product updated. <a target="_blank" href="%s">View Product</a>', 'YOUR-TEXTDOMAIN'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'YOUR-TEXTDOMAIN'),
		3 => __('Custom field deleted.', 'YOUR-TEXTDOMAIN'),
		4 => __('Product updated.', 'YOUR-TEXTDOMAIN'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Product restored to revision from %s', 'YOUR-TEXTDOMAIN'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Product published. <a href="%s">View Product</a>', 'YOUR-TEXTDOMAIN'), esc_url( $permalink ) ),
		7 => __('Product saved.', 'YOUR-TEXTDOMAIN'),
		8 => sprintf( __('Product submitted. <a target="_blank" href="%s">Preview Product</a>', 'YOUR-TEXTDOMAIN'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Product scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Product</a>', 'YOUR-TEXTDOMAIN'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Product draft updated. <a target="_blank" href="%s">Preview Product</a>', 'YOUR-TEXTDOMAIN'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'product_updated_messages' );
