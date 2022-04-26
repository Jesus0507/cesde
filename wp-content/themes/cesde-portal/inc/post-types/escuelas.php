<?php
if ( ! function_exists('cesde_escuelas_custom_post_types') ) {

    // Register Custom Post Type
    function cesde_escuelas_custom_post_types() {
    
        $labels = array(
            'name'                  => _x( 'Escuelas', 'Post Type General Name', 'cesde_portal' ),
            'singular_name'         => _x( 'Escuela', 'Post Type Singular Name', 'cesde_portal' ),
            'menu_name'             => __( 'Escuelas', 'cesde_portal' ),
            'name_admin_bar'        => __( 'Escuelas', 'cesde_portal' ),
            'archives'              => __( 'Archivos de escuelas', 'cesde_portal' ),
            'attributes'            => __( 'Atributos de escuelas', 'cesde_portal' ),
            'parent_item_colon'     => __( 'Elemento padre', 'cesde_portal' ),
            'all_items'             => __( 'Todas las escuelas', 'cesde_portal' ),
            'add_new_item'          => __( 'Nueva escuela', 'cesde_portal' ),
            'add_new'               => __( 'Añadir nueva escuela', 'cesde_portal' ),
            'new_item'              => __( 'nueva escuela', 'cesde_portal' ),
            'edit_item'             => __( 'Editar escuela', 'cesde_portal' ),
            'update_item'           => __( 'Actualizar escuela', 'cesde_portal' ),
            'view_item'             => __( 'Ver escuela', 'cesde_portal' ),
            'view_items'            => __( 'Ver escuelas', 'cesde_portal' ),
            'search_items'          => __( 'Buscar escuela', 'cesde_portal' ),
            'not_found'             => __( 'No encontrada', 'cesde_portal' ),
            'not_found_in_trash'    => __( 'En hay en papelera', 'cesde_portal' ),
            'featured_image'        => __( 'Imagen destacada', 'cesde_portal' ),
            'set_featured_image'    => __( 'Config. escuela destacada', 'cesde_portal' ),
            'remove_featured_image' => __( 'remover imagen destacada', 'cesde_portal' ),
            'use_featured_image'    => __( 'Usar como images destacada', 'cesde_portal' ),
            'insert_into_item'      => __( 'Insertar en la escuela', 'cesde_portal' ),
            'uploaded_to_this_item' => __( 'Cargar a esta escuela', 'cesde_portal' ),
            'items_list'            => __( 'Lista de escuela', 'cesde_portal' ),
            'items_list_navigation' => __( 'Lista de escuelas', 'cesde_portal' ),
            'filter_items_list'     => __( 'Filtrar lista de escuelas', 'cesde_portal' ),
        );
        $rewrite = array(
            'slug'                  => 'escuelas',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __( 'Escuela', 'cesde_portal' ),
            'description'           => __( 'Nuestras escuelas', 'cesde_portal' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
            'taxonomies'            => [],
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-book',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => 'escuelas',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
            'rest_base'             => 'escuelas',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
        );
        register_post_type( 'cesde_escuelas', $args );
    
    }
    add_action( 'init', 'cesde_escuelas_custom_post_types', 0 );
    
    }