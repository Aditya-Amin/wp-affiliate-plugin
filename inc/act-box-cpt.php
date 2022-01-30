<?php
// Register Custom Post Type Strom Table
function acttable_three_product_box_cpt() {

    $labels = array(
        'name' => _x( 'Product Box', 'Post Type General Name', 'acttable' ),
        'singular_name' => _x( 'Product Box', 'Post Type Singular Name', 'acttable' ),
        'menu_name' => _x( 'Product Box', 'Admin Menu text', 'acttable' ),
        'name_admin_bar' => _x( 'Product Box', 'Add New on Toolbar', 'acttable' ),
        'archives' => __( 'act Product Archives', 'acttable' ),
        'attributes' => __( 'act Product Attributes', 'acttable' ),
        'parent_item_colon' => __( 'Parent Product Box:', 'acttable' ),
        'all_items' => __( 'All Product Boxes', 'acttable' ),
        'add_new_item' => __( 'Add New Product Box', 'acttable' ),
        'add_new' => __( 'Add New Product Box', 'acttable' ),
        'new_item' => __( 'New act Product', 'acttable' ),
        'edit_item' => __( 'Edit act Product', 'acttable' ),
        'update_item' => __( 'Update act Product', 'acttable' ),
        'view_item' => __( 'View act Product', 'acttable' ),
        'view_items' => __( 'View act Product', 'acttable' ),
        'search_items' => __( 'Search act Product', 'acttable' ),
        'not_found' => __( 'Not found Product', 'acttable' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'acttable' ),
        'featured_image' => __( 'Featured Image', 'acttable' ),
        'set_featured_image' => __( 'Set featured image', 'acttable' ),
        'remove_featured_image' => __( 'Remove featured image', 'acttable' ),
        'use_featured_image' => __( 'Use as featured image', 'acttable' ),
        'uploaded_to_this_item' => __( 'Uploaded to this act Product', 'acttable' ),
        'items_list' => __( 'act Product list', 'acttable' ),
        'items_list_navigation' => __( 'stromtable list navigation', 'acttable' ),
        'filter_items_list' => __( 'Filter stromtable list', 'acttable' ),
    );
    $args = array(
        'label' => __( 'act Product Box', 'acttable' ),
        'description' => __( 'act Product Box', 'acttable' ),
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
add_action( 'init', 'acttable_three_product_box_cpt', 0 );


// // custom columns for productbox post type
// add_filter( 'manage_productbox_posts_columns', 'box_add_custom_columns' );
// function box_add_custom_columns($columns) {
//     $columns['shortcode'] = __( 'Shortcode', 'act' );

//     return $columns;
// }

// // Add the data to the custom columns for the productbox post type:
// add_action( 'manage_productbox_posts_custom_column' , 'custom_productbox_column', 10, 2 );
// function custom_productbox_column( $column, $post_id ) {
//     switch ( $column ) {

//         case 'shortcode' :
//             $terms = get_post_meta( $post_id );
//             echo $terms['actpro_shortcode_id'][0];
//             break;

//     }
// }