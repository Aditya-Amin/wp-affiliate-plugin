<?php
// Register Custom Post Type Strom Table
function dpresstable_three_product_box_cpt() {

    $labels = array(
        'name' => _x( 'Product Box', 'Post Type General Name', 'dpresstable' ),
        'singular_name' => _x( 'Product Box', 'Post Type Singular Name', 'dpresstable' ),
        'menu_name' => _x( 'Product Box', 'Admin Menu text', 'dpresstable' ),
        'name_admin_bar' => _x( 'Product Box', 'Add New on Toolbar', 'dpresstable' ),
        'archives' => __( 'dPress Product Archives', 'dpresstable' ),
        'attributes' => __( 'dPress Product Attributes', 'dpresstable' ),
        'parent_item_colon' => __( 'Parent Product Box:', 'dpresstable' ),
        'all_items' => __( 'All Product Boxes', 'dpresstable' ),
        'add_new_item' => __( 'Add New Product Box', 'dpresstable' ),
        'add_new' => __( 'Add New Product Box', 'dpresstable' ),
        'new_item' => __( 'New dPress Product', 'dpresstable' ),
        'edit_item' => __( 'Edit dPress Product', 'dpresstable' ),
        'update_item' => __( 'Update dPress Product', 'dpresstable' ),
        'view_item' => __( 'View dPress Product', 'dpresstable' ),
        'view_items' => __( 'View dPress Product', 'dpresstable' ),
        'search_items' => __( 'Search dPress Product', 'dpresstable' ),
        'not_found' => __( 'Not found Product', 'dpresstable' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'dpresstable' ),
        'featured_image' => __( 'Featured Image', 'dpresstable' ),
        'set_featured_image' => __( 'Set featured image', 'dpresstable' ),
        'remove_featured_image' => __( 'Remove featured image', 'dpresstable' ),
        'use_featured_image' => __( 'Use as featured image', 'dpresstable' ),
        'uploaded_to_this_item' => __( 'Uploaded to this dPress Product', 'dpresstable' ),
        'items_list' => __( 'dPress Product list', 'dpresstable' ),
        'items_list_navigation' => __( 'stromtable list navigation', 'dpresstable' ),
        'filter_items_list' => __( 'Filter stromtable list', 'dpresstable' ),
    );
    $args = array(
        'label' => __( 'dPress Product Box', 'dpresstable' ),
        'description' => __( 'dPress Product Box', 'dpresstable' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title'),
        'taxonomies' => array(),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => false,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => false,
        'can_export' => true,
        'has_archive' => false,
        'hierarchical' => false,
        'exclude_from_search' => true,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'productbox', $args );

}
add_action( 'init', 'dpresstable_three_product_box_cpt', 0 );


// custom columns for productbox post type
add_filter( 'manage_productbox_posts_columns', 'box_add_custom_columns' );
function box_add_custom_columns($columns) {
    $columns['shortcode'] = __( 'Shortcode', 'act' );

    return $columns;
}

// Add the data to the custom columns for the productbox post type:
add_action( 'manage_productbox_posts_custom_column' , 'custom_productbox_column', 10, 2 );
function custom_productbox_column( $column, $post_id ) {
    switch ( $column ) {

        case 'shortcode' :
            $terms = get_post_meta( $post_id );
            echo $terms['dpresspro_shortcode_id'][0];
            break;

    }
}