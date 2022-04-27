<?php
if ( ! function_exists('calendarSchedule') ) {

    // Register Custom Post Type
    function calendarSchedule() {
    
        $labels = array(
            'name'                  => _x( 'Cronograma de eventos', 'Post Type General Name', 'cesde_portal' ),
            'singular_name'         => _x( 'Cronograma del evento', 'Post Type Singular Name', 'cesde_portal' ),
            'menu_name'             => __( 'Cronograma de eventos', 'cesde_portal' ),
            'name_admin_bar'        => __( 'Cronograma de eventos', 'cesde_portal' ),
            'archives'              => __( 'Eventos de archivos', 'cesde_portal' ),
            'attributes'            => __( 'Atributo del evento', 'cesde_portal' ),
            'parent_item_colon'     => __( 'Parent Item:', 'cesde_portal' ),
            'all_items'             => __( 'Todas las fechas', 'cesde_portal' ),
            'add_new_item'          => __( 'Añadir nuevo Fecha', 'cesde_portal' ),
            'add_new'               => __( 'Añadir nuevo', 'cesde_portal' ),
            'new_item'              => __( 'Nuevo fecha', 'cesde_portal' ),
            'edit_item'             => __( 'Editar fecha', 'cesde_portal' ),
            'update_item'           => __( 'Actualizar fecha', 'cesde_portal' ),
            'view_item'             => __( 'Ver fecha', 'cesde_portal' ),
            'view_items'            => __( 'Ver todas las fechas', 'cesde_portal' ),
            'search_items'          => __( 'Buscar fecha', 'cesde_portal' ),
            'not_found'             => __( 'No encontrado', 'cesde_portal' ),
            'not_found_in_trash'    => __( 'No encontrada en la papelera', 'cesde_portal' ),
            'featured_image'        => __( 'Imagen destacada', 'cesde_portal' ),
            'set_featured_image'    => __( 'Configurar imagen destacada', 'cesde_portal' ),
            'remove_featured_image' => __( 'Remover imagen destacada', 'cesde_portal' ),
            'use_featured_image'    => __( 'Usar como imagen destacada', 'cesde_portal' ),
            'insert_into_item'      => __( 'Insertar en la fecha', 'cesde_portal' ),
            'uploaded_to_this_item' => __( 'Actualizar esta fechar', 'cesde_portal' ),
            'items_list'            => __( 'Lista de fechar', 'cesde_portal' ),
            'items_list_navigation' => __( 'Items list navigation', 'cesde_portal' ),
            'filter_items_list'     => __( 'Filter items list', 'cesde_portal' ),
        );
        $args = array(
            'label'                 => __( 'Cronograma de eventos', 'cesde_portal' ),
            'description'           => __( 'Sistema de cronograma de fechas de nuestros eventos', 'cesde_portal' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-calendar',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'rewrite'               => false,
            'capability_type'       => 'page',
        );
        register_post_type( 'cesde_shedule', $args );
    
    }
    add_action( 'init', 'calendarSchedule', 0 );
    
    }