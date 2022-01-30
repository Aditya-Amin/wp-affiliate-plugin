<?php

// Register Custom Post Type Strom Table
function act_table_cpt() {

    $labels = array(
        'name' => _x( 'ACT Tables', 'Post Type General Name', 'acttable' ),
        'singular_name' => _x( 'ACT Table', 'Post Type Singular Name', 'acttable' ),
        'menu_name' => _x( 'ACT Tables', 'Admin Menu text', 'acttable' ),
        'name_admin_bar' => _x( 'ACT Table', 'Add New on Toolbar', 'acttable' ),
        'archives' => __( 'ACT Table Archives', 'acttable' ),
        'attributes' => __( 'ACT Table Attributes', 'acttable' ),
        'parent_item_colon' => __( 'Parent Strom Table:', 'acttable' ),
        'all_items' => __( 'All Tables', 'acttable' ),
        'add_new_item' => __( 'Add New Table', 'acttable' ),
        'add_new' => __( 'Add New Table', 'acttable' ),
        'new_item' => __( 'New Table', 'acttable' ),
        'edit_item' => __( 'Edit Table', 'acttable' ),
        'update_item' => __( 'Update Table', 'acttable' ),
        'view_item' => __( 'View Table', 'acttable' ),
        'view_items' => __( 'View Table', 'acttable' ),
        'search_items' => __( 'Search Table', 'acttable' ),
        'not_found' => __( 'Not found', 'acttable' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'acttable' ),
        'featured_image' => __( 'Featured Image', 'acttable' ),
        'set_featured_image' => __( 'Set featured image', 'acttable' ),
        'remove_featured_image' => __( 'Remove featured image', 'acttable' ),
        'use_featured_image' => __( 'Use as featured image', 'acttable' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Table', 'acttable' ),
        'items_list' => __( 'stromtable list', 'acttable' ),
        'items_list_navigation' => __( 'stromtable list navigation', 'acttable' ),
        'filter_items_list' => __( 'Filter stromtable list', 'acttable' ),
    );
    $args = array(
        'label' => __( 'Tables', 'acttable' ),
        'description' => __( 'ACT Tables', 'acttable' ),
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


// // custom columns for acttablecpt post type
// add_filter( 'manage_acttable_posts_columns', 'table_add_custom_columns' );
// function table_add_custom_columns($columns) {
//     $columns['shortcode'] = __( 'Shortcode', 'act' );

//     return $columns;
// }

// // Add the data to the custom columns for the acttable post type:
// add_action( 'manage_acttable_posts_custom_column' , 'custom_acttable_column', 10, 2 );
// function custom_acttable_column( $column, $post_id ) {
//     switch ( $column ) {

//         case 'shortcode' :
//             $terms = get_post_meta( $post_id );
//             echo $terms['acttable_shortcode_id'][0];
//             break;

//     }
// }