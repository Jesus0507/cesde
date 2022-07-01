<?php

require_once __DIR__ . '/admin_pages/info-page.php';
require_once __DIR__ . '/admin_pages/catalogo_page_escuela.php';
require_once __DIR__ . '/admin_pages/catalogo_page_sede.php';
require_once __DIR__ . '/admin_pages/catalogo_page_noticias.php';
require_once __DIR__ . '/admin_pages/catalogo_cesde_programas_taxonomy.php';
require_once __DIR__ . '/admin_pages/float_widget_page.php';


/**
 * Register a custom menu page.
 */
function cesde_admin_page_archive_setting() {
   //add_menu_page( $page_title:string, $menu_title:string, $capability:string, $menu_slug:string, $function:callable, $icon_url:string, $position:integer|null );
   // add_submenu_page( $parent_slug:string, $page_title:string, $menu_title:string, $capability:string, $menu_slug:string, $function:callable, $position:integer|null )

   add_menu_page( 
        'Configuraciones Cesde Portal', 
        'Cesde Portal', 
        'manage_options',
        'configuraciones_cesde', 
        'cesde_config_init_page', 
        get_stylesheet_directory_uri().'/assets/img/cropped-logo-270x270.png',
        2
    );
   
    add_submenu_page( 
        'configuraciones_cesde', 
        'Configurar catalogo escuelas', 
        'Catalogo escuelas', 
        'manage_options', 
        'configurar_catalogo_escuelas', 
        'cesde_catalogo_page_escuela', 
        2 );
        add_submenu_page( 
            'configuraciones_cesde', 
            'Configurar catalogo sedes', 
            'Catalogo Sedes', 
            'manage_options', 
            'configurar_catalogo_sedes', 
            'cesde_catalogo_page_sedes', 
            3 );
        //cesde_catalogo_page_noticias
        add_submenu_page( 
            'configuraciones_cesde', 
            'Configurar catalogo Noticias', 
            'Catalogo Noticias', 
            'manage_options', 
            'configurar_catalogo_noticias', 
            'cesde_catalogo_page_noticias', 
            4 );
        //cesde_programas_taxonomy
        add_submenu_page( 
            'configuraciones_cesde', 
            'Configurar catalogo de programas', 
            'Catalogo Programas', 
            'manage_options', 
            'configurar_programas_taxonomy', 
            'cesde_page_programas_taxonomy', 
            5 );
        add_submenu_page( 
            'configuraciones_cesde', 
            'Configuración Menu flotante', 
            'Menu flotante', 
            'manage_options', 
            'float_widgets_config', 
            'cesde_float_widget_options', 
            6 );
}
add_action( 'admin_menu', 'cesde_admin_page_archive_setting' );

