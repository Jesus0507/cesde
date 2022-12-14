<?php
define('VERSION_CESDE','1.0.0');
define('CESDE_DIR',__DIR__);
function wpse_remove_parent_theme_locations()
{
    // @link http://codex.wordpress.org/Function_Reference/unregister_nav_menu
    //'mobile_menu'
    unregister_nav_menu('mobile_menu');
    //footer_menu
    unregister_nav_menu('footer_menu');
    //footer_menu_right
    unregister_nav_menu('footer_menu_right');

    //add menu
    register_nav_menu( 'preheader_menu', 'Menu preheader' );

    //add images setup
    add_image_size( 'sedes-cover', 212, 400 );
}
require_once CESDE_DIR .'/inc/extras/classes/cesde_catalogo_page.php';
function cesde_localize_paramas(){
  
    return array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'project_url'=> get_stylesheet_directory_uri(),
       
        
    );
}

add_action( 'after_setup_theme', 'wpse_remove_parent_theme_locations', 20 );

//frontend
add_action( 'wp_enqueue_scripts', 'cesde_styles_scripts',9999 );
function cesde_styles_scripts(){
    wp_enqueue_style( 'fontawesome6', get_stylesheet_directory_uri() . '/assets/libs/fontawesome-6/css/all.min.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        VERSION_CESDE
    );
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css', 
        array('wpbf-responsive','fontawesome6'),  // if the parent theme code has a dependency, copy it to here
        VERSION_CESDE
    );
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js', ['wpbf-site'], VERSION_CESDE, true );
    wp_localize_script('main','cesde_front_ajax',cesde_localize_paramas());
}
//backoffice
add_action( 'admin_enqueue_scripts', 'cesde_admin_styles_scripts',9999 );
function cesde_admin_styles_scripts($hook_suffix )
{
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
    if(!did_action('wp-color-picker')){
        wp_enqueue_style( 'wp-color-picker' );
    }
    wp_enqueue_style( 'cesde_main', get_stylesheet_directory_uri() . '/assets/css/backoffice.css', 
    array(),  // if the parent theme code has a dependency, copy it to here
    VERSION_CESDE
);
    wp_enqueue_script( 'cesde_main', get_stylesheet_directory_uri() . '/assets/js/back.js', ['jquery','wp-color-picker'], VERSION_CESDE, true );
    wp_localize_script('cesde_main','cesde_back_ajax',cesde_localize_paramas());
}
//cut excerpt 

function cesde_custom_excerpts($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, '...');
}
if( !is_admin() ){  
    add_action( 'pre_get_posts',  'set_per_page'  );
}
function set_per_page( $query ) {
    global $wp_the_query;
    if($query->is_post_type_archive('cesde_noticias')&&($query === $wp_the_query)){
    $query->set( 'posts_per_page', 1);
    }
  return $query;
} 

//includes
    require_once __DIR__ . '/inc/post-types/post-types.php';
    require_once __DIR__ . '/inc/extras/breadcumb.php';
    require_once __DIR__ . '/inc/extras/admins_pages.php';
    require_once(__DIR__ . '/inc/shortcodes/shortcodes.php');
    if (file_exists( __DIR__ .'/inc/taxonomies/taxonomies.php')) {
        require_once  __DIR__ .'/inc/taxonomies/taxonomies.php';
    }
?>