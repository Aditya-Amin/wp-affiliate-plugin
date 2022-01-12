<?php

// Register Custom Post Type Strom Table
function act_table_cpt() {

    $labels = array(
        'name' => _x( 'ACT Tables', 'Post Type General Name', 'dpresstable' ),
        'singular_name' => _x( 'ACT Table', 'Post Type Singular Name', 'dpresstable' ),
        'menu_name' => _x( 'ACT Tables', 'Admin Menu text', 'dpresstable' ),
        'name_admin_bar' => _x( 'ACT Table', 'Add New on Toolbar', 'dpresstable' ),
        'archives' => __( 'ACT Table Archives', 'dpresstable' ),
        'attributes' => __( 'ACT Table Attributes', 'dpresstable' ),
        'parent_item_colon' => __( 'Parent Strom Table:', 'dpresstable' ),
        'all_items' => __( 'All Tables', 'dpresstable' ),
        'add_new_item' => __( 'Add New Table', 'dpresstable' ),
        'add_new' => __( 'Add New Table', 'dpresstable' ),
        'new_item' => __( 'New Table', 'dpresstable' ),
        'edit_item' => __( 'Edit Table', 'dpresstable' ),
        'update_item' => __( 'Update Table', 'dpresstable' ),
        'view_item' => __( 'View Table', 'dpresstable' ),
        'view_items' => __( 'View Table', 'dpresstable' ),
        'search_items' => __( 'Search Table', 'dpresstable' ),
        'not_found' => __( 'Not found', 'dpresstable' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'dpresstable' ),
        'featured_image' => __( 'Featured Image', 'dpresstable' ),
        'set_featured_image' => __( 'Set featured image', 'dpresstable' ),
        'remove_featured_image' => __( 'Remove featured image', 'dpresstable' ),
        'use_featured_image' => __( 'Use as featured image', 'dpresstable' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Table', 'dpresstable' ),
        'items_list' => __( 'stromtable list', 'dpresstable' ),
        'items_list_navigation' => __( 'stromtable list navigation', 'dpresstable' ),
        'filter_items_list' => __( 'Filter stromtable list', 'dpresstable' ),
    );
    $args = array(
        'label' => __( 'Tables', 'dpresstable' ),
        'description' => __( 'ACT Tables', 'dpresstable' ),
        'labels' => $labels,
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
    register_post_type( 'acttable', $args );

}
add_action( 'init', 'act_table_cpt', 0 );


// custom columns for dpresstablecpt post type
add_filter( 'manage_acttable_posts_columns', 'table_add_custom_columns' );
function table_add_custom_columns($columns) {
    $columns['shortcode'] = __( 'Shortcode', 'act' );

    return $columns;
}

// Add the data to the custom columns for the acttable post type:
add_action( 'manage_acttable_posts_custom_column' , 'custom_acttable_column', 10, 2 );
function custom_acttable_column( $column, $post_id ) {
    switch ( $column ) {

        case 'shortcode' :
            $terms = get_post_meta( $post_id );
            echo $terms['dpresstable_shortcode_id'][0];
            break;

    }
}