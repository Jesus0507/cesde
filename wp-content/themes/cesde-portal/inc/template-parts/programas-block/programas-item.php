<?php
/**
 * template_part noticias-item
 */
$notices_item_settings = get_query_var( 'notices_item_settings' );
$title = $notices_item_settings['title'];
$excerpt = $notices_item_settings['excerpt'];
$link = $notices_item_settings['link'];
$desing = $notices_item_settings['desing'];
$desing2=$notices_item_settings['desing']==2?'item-desing-2':'';


 $ofertas= get_field('ofertas');
 $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true );
 $logo = get_theme_mod( 'custom_logo' );
 $image = wp_get_attachment_image_src( $logo , 'full' );
 $image_url =$featured_img?$featured_img[0]: $image[0];
 $image_width = $featured_img?$featured_img[1]: $image[1];
 $image_height =$featured_img?$featured_img[2]: $image[2];;
 $sedes_disponibles = get_field('ofertas'); 
?>
<article  data-groups='["todos"<?php
    foreach ($sedes_disponibles as $sede_ID ) {
        $sede=get_post($sede_ID);
        echo ',"'.$sede->post_name.'"';
    }

?>]' class="programa-item <?php echo $desing2;?>">
   <a href="<?php echo get_the_permalink(  ); ?>">
   <div class="programa-imagen">
   <a href="<?php echo get_the_permalink(  ); ?>">
    <?php
     if($featured_img){
        
        $alt= get_the_title();
      echo '<img loading="lazy" src="'.$image_url .'" width="'. $image_width .' height="'.  $image_height.'" alt="'. $alt.'" />';
    }else{
        echo '<img loading="lazy" src="'.$image_url .'" alt="'.get_bloginfo('name').' - '. get_the_title() .'" />';
    }
    
    ?>
    </a>
       <div  class="programa-category">
        <?php
        $terms = get_the_terms( get_the_ID(), 'cesde_programas_taxonomy' );
        
       
       foreach ( $terms as $term) {
        
        $color = get_field('color_de_la_categoria_de_la_etiqueta', $term);
        echo   '<h5 style="background:'. $color .';"><a style="color:white;" href="'.get_term_link($term->slug,'cesde_programas_taxonomy').'">'. $term->name.'</a></h5>';
       }
            
        
        ?>
        </div>
   </div>
   <a href="<?php echo get_the_permalink(  ); ?>">
   <div class="programa-text">
       
       <h2 class="programa-title">
           <?php
           echo get_the_title();
           ?>
       </h2>
    <div class="ver-mas">
        Ver más

    </div>
   </div>

   </a>
  
</article>
