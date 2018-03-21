<?php

//
class Pallas_Member_Type {
	public function __construct() {
		add_action( 'init', array( $this, 'pallas_member_init' ) );
		add_action( 'init', array( $this, 'pallas_create_member_taxonomies' ), 0 );
	}

	/**
	 * Register a member post type.
	 */
	public function pallas_member_init() {
		$labels = array(
			'name'               => _x( 'Members', 'post type general name', 'pallas' ),
			'singular_name'      => _x( 'Member', 'post type singular name', 'pallas' ),
			'menu_name'          => _x( 'Members', 'admin menu', 'pallas' ),
			'name_admin_bar'     => _x( 'Member', 'add new on admin bar', 'pallas' ),
			'add_new'            => _x( 'Add New', 'member', 'pallas' ),
			'add_new_item'       => __( 'Add New Member', 'pallas' ),
			'new_item'           => __( 'New Member', 'pallas' ),
			'edit_item'          => __( 'Edit Member', 'pallas' ),
			'view_item'          => __( 'View Member', 'pallas' ),
			'all_items'          => __( 'All Members', 'pallas' ),
			'search_items'       => __( 'Search Members', 'pallas' ),
			'parent_item_colon'  => __( 'Parent Members:', 'pallas' ),
			'not_found'          => __( 'No members found.', 'pallas' ),
			'not_found_in_trash' => __( 'No members found in Trash.', 'pallas' )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => false,
			'publicly_queryable' => false,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'pl_member' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'			 => 'dashicons-groups',
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', )
		);

		register_post_type( 'pl_member', $args );
	}

	public function pallas_create_member_taxonomies() {
		$labels = array(
			'name'              => _x( 'Skills', 'taxonomy general name', 'pallas' ),
			'singular_name'     => _x( 'Skill', 'taxonomy singular name', 'pallas' ),
			'search_items'      => __( 'Search Skills', 'pallas' ),
			'all_items'         => __( 'All Skills', 'pallas' ),
			'parent_item'       => __( 'Parent Skill', 'pallas' ),
			'parent_item_colon' => __( 'Parent Skill:', 'pallas' ),
			'edit_item'         => __( 'Edit Skill', 'pallas' ),
			'update_item'       => __( 'Update Skill', 'pallas' ),
			'add_new_item'      => __( 'Add New Skill', 'pallas' ),
			'new_item_name'     => __( 'New Skill Name', 'pallas' ),
			'menu_name'         => __( 'Skills', 'pallas' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'members/skill' ),
		);

		register_taxonomy( 'pl_member_skill', array( 'pl_member' ), $args );
	}
}

new Pallas_Member_Type();
