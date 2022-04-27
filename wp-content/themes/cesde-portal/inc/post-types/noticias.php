<?php
if ( ! function_exists('custom_noticias_post') ) {

    // Register Custom Post Type
    function custom_noticias_post() {
    
        $labels = array(
            'name'                  => _x( 'Noticas', 'Post Type General Name', 'cesde_portal' ),
            'singular_name'         => _x( 'Noticia', 'Post Type Singular Name', 'cesde_portal' ),
            'menu_name'             => __( 'Noticias', 'cesde_portal' ),
            'name_admin_bar'        => __( 'Noticias', 'cesde_portal' ),
            'archives'              => __( 'Lista de noticias', 'cesde_portal' ),
            'attributes'            => __( 'Atributos de noticias', 'cesde_portal' ),
            'parent_item_colon'     => __( 'Elementos superiores', 'cesde_portal' ),
            'all_items'             => __( 'Todas las noticias', 'cesde_portal' ),
            'add_new_item'          => __( 'Añadir nueva noticia', 'cesde_portal' ),
            'add_new'               => __( 'Añade noticia', 'cesde_portal' ),
            'new_item'              => __( 'Nueva noticia', 'cesde_portal' ),
            'edit_item'             => __( 'Editar noticia', 'cesde_portal' ),
            'update_item'           => __( 'Actualizar noticia', 'cesde_portal' ),
            'view_item'             => __( 'Ver noticias', 'cesde_portal' ),
            'view_items'            => __( 'Ver noticias', 'cesde_portal' ),
            'search_items'          => __( 'Buscar noticia', 'cesde_portal' ),
            'not_found'             => __( 'Noticia no encontrada', 'cesde_portal' ),
            'not_found_in_trash'    => __( 'No encontrada en la papelera', 'cesde_portal' ),
            'featured_image'        => __( 'Imagen destacada', 'cesde_portal' ),
            'set_featured_image'    => __( 'Conf. imagen destacada', 'cesde_portal' ),
            'remove_featured_image' => __( 'Remover imagen destacada', 'cesde_portal' ),
            'use_featured_image'    => __( 'Utilizar como imagen destacada', 'cesde_portal' ),
            'insert_into_item'      => __( 'Insertar en la noticia', 'cesde_portal' ),
            'uploaded_to_this_item' => __( 'Cargar en esta noticia', 'cesde_portal' ),
            'items_list'            => __( 'Lista de noticias', 'cesde_portal' ),
            'items_list_navigation' => __( 'Lista de noticias de navegación', 'cesde_portal' ),
            'filter_items_list'     => __( 'Filtrar lista de noticias', 'cesde_portal' ),
        );
        $rewrite = array(
            'slug'                  => 'noticias',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __( 'Noticia', 'cesde_portal' ),
            'description'           => __( 'Noticas de nuestras escuelas y sede', 'cesde_portal' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
            'taxonomies'            => array( 'notice_taxonomy' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-megaphone',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => 'noticias',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'post',
            'show_in_rest'          => true,
            'rest_base'             => 'noticias',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
        );
        register_post_type( 'cesde_noticias', $args );
    
    }
    add_action( 'init', 'custom_noticias_post', 0 );
    
    }
?>