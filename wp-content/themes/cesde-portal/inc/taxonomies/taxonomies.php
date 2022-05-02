<?php

if (file_exists( __DIR__ .'/noticias.php')) {
    require_once  __DIR__ .'/noticias.php';
}
if (file_exists( __DIR__ .'/programas.php')) {
    require_once  __DIR__ .'/programas.php';
}

function change_link( $post_link, $id = 0 ) {
    $post = get_post( $id );
    if( $post->post_type == 'cesde_programas' ) 
    {
       if ( is_object( $post ) ) {
          $terms = wp_get_object_terms( $post->ID, array('cesde_programas_taxonomy') );
          if ( $terms ) {
             return str_replace( '%escuela-del-programa%', $terms[0]->slug, $post_link );
         }
      }
    }
    return   $post_link ;
}
add_filter( 'post_type_link', 'change_link', 1, 3 );

//load the template on the new generated URL otherwise you will get 404's the page

 function generated_rewrite_rules() {
   add_rewrite_rule(
       '^programas/(.*)/(.*)/?$',
       'index.php?post_type=cesde_programas&name=$matches[2]',
       'top'
   );
}
add_action( 'init', 'generated_rewrite_rules' );