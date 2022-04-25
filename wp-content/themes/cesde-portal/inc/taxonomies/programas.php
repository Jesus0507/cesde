<?php
if ( ! function_exists( 'cesde_programas_taxonomy' ) ) {

    // Register Custom Taxonomy
    function cesde_programas_taxonomy() {
    
        $labels = array(
            'name'                       => _x( 'Escuelas Cesde', 'Taxonomy General Name', 'cesde_portal' ),
            'singular_name'              => _x( 'Escuela Cesde', 'Taxonomy Singular Name', 'cesde_portal' ),
            'menu_name'                  => __( 'Escuelas Cesde', 'cesde_portal' ),
            'all_items'                  => __( 'Todas las Escuelas Cesde', 'cesde_portal' ),
          //  'parent_item'                => __( 'Cat. de programas superior', 'cesde_portal' ),
            'parent_item_colon'          => __( 'Parent Item:', 'cesde_portal' ),
            'new_item_name'              => __( 'Añade nueva Escuelas Cesde', 'cesde_portal' ),
            'add_new_item'               => __( 'Añade Escuelas Cesde', 'cesde_portal' ),
            'edit_item'                  => __( 'Editar Escuelas Cesde', 'cesde_portal' ),
            'update_item'                => __( 'actualizar Escuelas Cesde', 'cesde_portal' ),
            'view_item'                  => __( 'Ver Escuelas Cesde', 'cesde_portal' ),
            'separate_items_with_commas' => __( 'Seperado por comas', 'cesde_portal' ),
            'add_or_remove_items'        => __( 'Añade o remueve elemento', 'cesde_portal' ),
            'choose_from_most_used'      => __( 'Elegir los maás utilizadas', 'cesde_portal' ),
            'popular_items'              => __( 'Elementos populares', 'cesde_portal' ),
            'search_items'               => __( 'Buscar Escuelas Cesde', 'cesde_portal' ),
            'not_found'                  => __( 'No encontrada', 'cesde_portal' ),
            'no_terms'                   => __( 'No hay categorias', 'cesde_portal' ),
            'items_list'                 => __( 'Lista de Escuelas Cesde', 'cesde_portal' ),
            'items_list_navigation'      => __( 'Lista de navegación', 'cesde_portal' ),
        );
        $rewrite = array(
            'slug'                       => 'escuela-del-programa',
            'with_front'                 => true,
            'hierarchical'               => true,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    =>  $rewrite,
            'show_in_rest'               => true,
            'rest_base'                  => 'categorias-programas',
            'rest_controller_class'      => 'WP_REST_Terms_Controller',
        );
        register_taxonomy( 'cesde_programas_taxonomy', array( 'cesde_programas' ), $args );
    
    }
    add_action( 'init', 'cesde_programas_taxonomy', 0 );
    
    }