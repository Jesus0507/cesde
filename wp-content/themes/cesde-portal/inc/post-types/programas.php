<?php
if ( ! function_exists('cesde_programas_cpt') ) {

// Register Custom Post Type
function cesde_programas_cpt() {

	$labels = array(
		'name'                  => _x( 'Programas', 'Post Type General Name', 'cesde_portal' ),
		'singular_name'         => _x( 'programa', 'Post Type Singular Name', 'cesde_portal' ),
		'menu_name'             => __( 'Programas', 'cesde_portal' ),
		'name_admin_bar'        => __( 'Programas', 'cesde_portal' ),
		'archives'              => __( 'Lista de pregramas', 'cesde_portal' ),
		'attributes'            => __( 'Atributos de programas', 'cesde_portal' ),
		'parent_item_colon'     => __( 'Elementos superiores', 'cesde_portal' ),
		'all_items'             => __( 'Todas las programas', 'cesde_portal' ),
		'add_new_item'          => __( 'Añadir nueva programa', 'cesde_portal' ),
		'add_new'               => __( 'Añade programa', 'cesde_portal' ),
		'new_item'              => __( 'Nueva programa', 'cesde_portal' ),
		'edit_item'             => __( 'Editar programa', 'cesde_portal' ),
		'update_item'           => __( 'Actualizar programa', 'cesde_portal' ),
		'view_item'             => __( 'Ver programa', 'cesde_portal' ),
		'view_items'            => __( 'Ver programas', 'cesde_portal' ),
		'search_items'          => __( 'Buscar programa', 'cesde_portal' ),
		'not_found'             => __( 'Programa no encontrado', 'cesde_portal' ),
		'not_found_in_trash'    => __( 'No encontrada en la papelera', 'cesde_portal' ),
		'featured_image'        => __( 'Imagen destacada', 'cesde_portal' ),
		'set_featured_image'    => __( 'Conf. imagen destacada', 'cesde_portal' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'cesde_portal' ),
		'use_featured_image'    => __( 'Utilizar como imagen destacada', 'cesde_portal' ),
		'insert_into_item'      => __( 'Insertar en el programa', 'cesde_portal' ),
		'uploaded_to_this_item' => __( 'Cargar en este programa', 'cesde_portal' ),
		'items_list'            => __( 'Lista de programas', 'cesde_portal' ),
		'items_list_navigation' => __( 'Lista de programas de navegación', 'cesde_portal' ),
		'filter_items_list'     => __( 'Filtrar lista de programas', 'cesde_portal' ),
	);
	$rewrite = array(
		'slug'                  => 'programas/%escuela-del-programa%',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'programa', 'cesde_portal' ),
		'description'           => __( 'Nuestros programas', 'cesde_portal' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'cesde_programas_taxonomy' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-category',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'programas',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rest_base'             => 'programas',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	);
	register_post_type( 'cesde_programas', $args );

}
add_action( 'init', 'cesde_programas_cpt', 0 );

}