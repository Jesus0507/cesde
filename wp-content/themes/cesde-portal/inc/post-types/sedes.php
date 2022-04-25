<?php

if ( ! function_exists('cesde_Sedes_custom_post_types') ) {

    // Register Custom Post Type
    function cesde_Sedes_custom_post_types() {
    
        $labels = array(
            'name'                  => _x( 'Sedes', 'Post Type General Name', 'cesde_portal' ),
            'singular_name'         => _x( 'Sede', 'Post Type Singular Name', 'cesde_portal' ),
            'menu_name'             => __( 'Sedes', 'cesde_portal' ),
            'name_admin_bar'        => __( 'Sedes', 'cesde_portal' ),
            'archives'              => __( 'Archivos de Sedes', 'cesde_portal' ),
            'attributes'            => __( 'Atributos de Sedes', 'cesde_portal' ),
            'parent_item_colon'     => __( 'Elemento padre', 'cesde_portal' ),
            'all_items'             => __( 'Todas las Sedes', 'cesde_portal' ),
            'add_new_item'          => __( 'Nueva Sede', 'cesde_portal' ),
            'add_new'               => __( 'Añadir nueva Sede', 'cesde_portal' ),
            'new_item'              => __( 'nueva Sede', 'cesde_portal' ),
            'edit_item'             => __( 'Editar Sede', 'cesde_portal' ),
            'update_item'           => __( 'Actualizar Sede', 'cesde_portal' ),
            'view_item'             => __( 'Ver Sede', 'cesde_portal' ),
            'view_items'            => __( 'Ver Sedes', 'cesde_portal' ),
            'search_items'          => __( 'Buscar Sede', 'cesde_portal' ),
            'not_found'             => __( 'No encontrada', 'cesde_portal' ),
            'not_found_in_trash'    => __( 'En hay en papelera', 'cesde_portal' ),
            'featured_image'        => __( 'Imagen destacada', 'cesde_portal' ),
            'set_featured_image'    => __( 'Config. Sede destacada', 'cesde_portal' ),
            'remove_featured_image' => __( 'remover imagen destacada', 'cesde_portal' ),
            'use_featured_image'    => __( 'Usar como images destacada', 'cesde_portal' ),
            'insert_into_item'      => __( 'Insertar en la Sede', 'cesde_portal' ),
            'uploaded_to_this_item' => __( 'Cargar a esta Sede', 'cesde_portal' ),
            'items_list'            => __( 'Lista de Sede', 'cesde_portal' ),
            'items_list_navigation' => __( 'Lista de Sedes', 'cesde_portal' ),
            'filter_items_list'     => __( 'Filtrar lista de Sedes', 'cesde_portal' ),
        );
        $rewrite = array(
            'slug'                  => 'sedes',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __( 'sede', 'cesde_portal' ),
            'description'           => __( 'Nuestras Sedes', 'cesde_portal' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
            'taxonomies'            => false,
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-building',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => 'sedes',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
            'rest_base'             => 'sedes',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
        );
        register_post_type( 'cesde_sedes', $args );
    
    }
    add_action( 'init', 'cesde_Sedes_custom_post_types', 0 );
    
    }