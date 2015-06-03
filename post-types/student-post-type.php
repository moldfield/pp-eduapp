<?// Register Custom Post Type
function pp_student() {

	$labels = array(
		'name'                => _x( 'Students', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Student', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Student', 'text_domain' ),
		'name_admin_bar'      => __( 'Student', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Student:', 'text_domain' ),
		'all_items'           => __( 'All Students', 'text_domain' ),
		'add_new_item'        => __( 'Add New Student', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Studnet', 'text_domain' ),
		'edit_item'           => __( 'Edit Student', 'text_domain' ),
		'update_item'         => __( 'Update Student', 'text_domain' ),
		'view_item'           => __( 'View Student', 'text_domain' ),
		'search_items'        => __( 'Search Student', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'pp-student', 'text_domain' ),
		'description'         => __( 'Student Post Type', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'pp-student', $args );

}
