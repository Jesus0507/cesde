<?php
if ( ! function_exists('cesde_time_line_cpt') ) {

    // Register Custom Post Type
    function cesde_time_line_cpt() {
    
        $labels = array(
            'name'                  => _x( 'Eventos de tiempo', 'Post Type General Name', 'cesde_portal' ),
            'singular_name'         => _x( 'Evento de tiempo', 'Post Type Singular Name', 'cesde_portal' ),
            'menu_name'             => __( 'Eventos de tiempo', 'cesde_portal' ),
            'name_admin_bar'        => __( 'Eventos de tiempo', 'cesde_portal' ),
            'archives'              => __( 'Evento de tiempo', 'cesde_portal' ),
            'attributes'            => __( 'Evento de tiempo atributos', 'cesde_portal' ),
            'parent_item_colon'     => __( 'Parent Item:', 'cesde_portal' ),
            'all_items'             => __( 'Todos los eventos de tiempo', 'cesde_portal' ),
            'add_new_item'          => __( 'Añadir nuevo evento de tiempo', 'cesde_portal' ),
            'add_new'               => __( 'Añadir nuevo', 'cesde_portal' ),
            'new_item'              => __( 'Nuevo Evento de tiempo', 'cesde_portal' ),
            'edit_item'             => __( 'Editar Evento de tiempo', 'cesde_portal' ),
            'update_item'           => __( 'Actualizar Evento de tiempo', 'cesde_portal' ),
            'view_item'             => __( 'Ver evento de tiempo', 'cesde_portal' ),
            'view_items'            => __( 'Ver todos los eventos de tiempo', 'cesde_portal' ),
            'search_items'          => __( 'Buscar evento de tiempo', 'cesde_portal' ),
            'not_found'             => __( 'no encontrado', 'cesde_portal' ),
            'not_found_in_trash'    => __( 'no ha en la papelera', 'cesde_portal' ),
            'featured_image'        => __( 'Imagen destacada', 'cesde_portal' ),
            'set_featured_image'    => __( 'Configurar imagen destacada', 'cesde_portal' ),
            'remove_featured_image' => __( 'Remover imagen destacada', 'cesde_portal' ),
            'use_featured_image'    => __( 'Usar como imagen destacada', 'cesde_portal' ),
            'insert_into_item'      => __( 'Insertar como evento de tiempo', 'cesde_portal' ),
            'uploaded_to_this_item' => __( 'Actualizar evento de tiempo', 'cesde_portal' ),
            'items_list'            => __( 'Lista de evento de tiempo', 'cesde_portal' ),
            
           
        );
        $args = array(
            'label'                 => __( 'Linea de tiempo Cesde', 'cesde_portal' ),
            'description'           => __( 'Linea de tiempo de nuestra empresa', 'cesde_portal' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-clock',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'rewrite'               => false,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
            'rest_base'             => 'timelime',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
        );
        register_post_type( 'time_line', $args );
    
    }
    add_action( 'init', 'cesde_time_line_cpt', 0 );
    
    }