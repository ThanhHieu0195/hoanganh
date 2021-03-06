<?php
namespace includes\posttypes;

use includes\classes\PostType;

class PostTypeIngredients extends PostType {
    static $class = 'IngredientPostType';
    public function getName() {
        return 'ingredient';
    }
    public function getConfigs() {
        $name = $this->getName();
        $labels = array(
            'name'               => _x( 'Ingredient', 'post type general name', 'dm' ),
            'singular_name'      => _x( 'Ingredient', 'post type singular name', 'dm' ),
            'menu_name'          => _x( 'Ingredients', 'admin menu', 'dm' ),
            'name_admin_bar'     => _x( 'Ingredients', 'add new on admin bar', 'dm' ),
            'add_new'            => _x( 'Add New', 'book', 'dm' ),
            'add_new_item'       => __( 'Add New Ingredients', 'dm' ),
            'new_item'           => __( 'New Ingredients', 'dm' ),
            'edit_item'          => __( 'Edit Ingredients', 'dm' ),
            'view_item'          => __( 'View Ingredients', 'dm' ),
            'all_items'          => __( 'All Ingredients', 'dm' ),
            'search_items'       => __( 'Search Ingredients', 'dm' ),
            'parent_item_colon'  => __( 'Parent Ingredients:', 'dm' ),
            'not_found'          => __( 'No projects found.', 'dm' ),
            'not_found_in_trash' => __( 'No projects found in Trash.', 'dm' )
        );
        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', 'dm' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => $name ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'excerpt', 'thumbnail'),
            'taxonomies' => []
        );

        return array_merge(parent::getConfigs(), $args); // TODO: Change the autogenerated stub
    }
}