<?php
if ( ! function_exists( 'programa_taxonomy' ) ) {

    // Register Custom Taxonomy
    function programa_taxonomy() {
    
        $labels = array(
            'name'                       => _x( 'Categorias de las noticias', 'Taxonomy General Name', 'cesde_portal' ),
            'singular_name'              => _x( 'Categoria de la noticia', 'Taxonomy Singular Name', 'cesde_portal' ),
            'menu_name'                  => __( 'Categoria de noticias', 'cesde_portal' ),
            'all_items'                  => __( 'Todas las Cat. de noticias', 'cesde_portal' ),
            'parent_item'                => __( 'Cat. de noticias superior', 'cesde_portal' ),
            'parent_item_colon'          => __( 'Parent Item:', 'cesde_portal' ),
            'new_item_name'              => __( 'Añade nueva Cat. de noticias', 'cesde_portal' ),
            'add_new_item'               => __( 'Añade Cat. de noticias', 'cesde_portal' ),
            'edit_item'                  => __( 'Editar Cat. de noticias', 'cesde_portal' ),
            'update_item'                => __( 'actualizar Cat. de noticias', 'cesde_portal' ),
            'view_item'                  => __( 'Ver Cat. de noticias', 'cesde_portal' ),
            'separate_items_with_commas' => __( 'Seperado por comas', 'cesde_portal' ),
            'add_or_remove_items'        => __( 'Añade o remueve elemento', 'cesde_portal' ),
            'choose_from_most_used'      => __( 'Elegir los maás utilizadas', 'cesde_portal' ),
            'popular_items'              => __( 'Elementos populares', 'cesde_portal' ),
            'search_items'               => __( 'Buscar cat. de noticia', 'cesde_portal' ),
            'not_found'                  => __( 'No encontrada', 'cesde_portal' ),
            'no_terms'                   => __( 'No hay categorias', 'cesde_portal' ),
            'items_list'                 => __( 'Lista de cat. de noticias', 'cesde_portal' ),
            'items_list_navigation'      => __( 'Lista de navegación', 'cesde_portal' ),
        );
        $rewrite = array(
            'slug'                       => 'noticias-cesde',
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
            'rewrite'                    => $rewrite,
        );
        register_taxonomy( 'programa_taxonomy', array( 'cesde_noticias' ), $args );
    
    }
    add_action( 'init', 'programa_taxonomy', 0 );
    
    }