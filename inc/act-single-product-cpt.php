<?php
// Register Custom Post Type Strom Single Product
function act_single_product_cpt() {

    $labels = array(
        'name' => _x( 'ACT Products', 'Post Type General Name', 'dpresstable' ),
        'singular_name' => _x( 'ACT Product', 'Post Type Singular Name', 'dpresstable' ),
        'menu_name' => _x( 'ACT Products', 'Admin Menu text', 'dpresstable' ),
        'name_admin_bar' => _x( 'ACT Product', 'Add New on Toolbar', 'dpresstable' ),
        'archives' => __( 'ACT Product Archives', 'dpresstable' ),
        'attributes' => __( 'ACT Product Attributes', 'dpresstable' ),
        'parent_item_colon' => __( 'Parent ACT Product:', 'dpresstable' ),
        'all_items' => __( 'All ACT Productes', 'dpresstable' ),
        'add_new_item' => __( 'Add New ACT Product', 'dpresstable' ),
        'add_new' => __( 'Add New ACT Product', 'dpresstable' ),
        'new_item' => __( 'New ACT Product', 'dpresstable' ),
        'edit_item' => __( 'Edit ACT Product', 'dpresstable' ),
        'update_item' => __( 'Update ACT Product', 'dpresstable' ),
        'view_item' => __( 'View ACT Product', 'dpresstable' ),
        'view_items' => __( 'View ACT Product', 'dpresstable' ),
        'search_items' => __( 'Search ACT Product', 'dpresstable' ),
        'not_found' => __( 'Not found Product', 'dpresstable' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'dpresstable' ),
        'featured_image' => __( 'Featured Image', 'dpresstable' ),
        'set_featured_image' => __( 'Set featured image', 'dpresstable' ),
        'remove_featured_image' => __( 'Remove featured image', 'dpresstable' ),
        'use_featured_image' => __( 'Use as featured image', 'dpresstable' ),
        'uploaded_to_this_item' => __( 'Uploaded to this ACT Product', 'dpresstable' ),
        'items_list' => __( 'ACT Product list', 'dpresstable' ),
        'items_list_navigation' => __( 'stromtable list navigation', 'dpresstable' ),
        'filter_items_list' => __( 'Filter stromtable list', 'dpresstable' ),
    );
    $args = array(
        'label' => __( 'ACT Product', 'dpresstable' ),
        'description' => __( 'ACT Product', 'dpresstable' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'thumbnail'),
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
    register_post_type( 'actproduct', $args );

}
add_action( 'init', 'act_single_product_cpt', 0 );


// custom columns for actproduct post type
add_filter( 'manage_actproduct_posts_columns', 'product_add_custom_columns' );
function product_add_custom_columns($columns) {
    $columns['shortcode'] = __( 'Shortcode', 'act' );
    $columns['order'] = __( 'Order', 'act' );

    return $columns;
}

// Add the data to the custom columns for the actproduct post type:
add_action( 'manage_actproduct_posts_custom_column' , 'custom_actproduct_column', 10, 2 );
function custom_actproduct_column( $column, $post_id ) {
    switch ( $column ) {

        case 'shortcode' :
            $terms = get_post_meta( $post_id );
            echo $terms['dpresspro_shortcode_id'][0];
            break;

        case 'order' :
            $terms = get_post_meta( $post_id );
            echo $terms['act_single_product_order'][0];
            break;

    }
}