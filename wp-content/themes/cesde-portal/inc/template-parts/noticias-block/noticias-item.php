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

?>
<article class="noticias-item <?php echo $desing2;?>">
   
    <div class="noticias-image">
        <div class="image">
        <a href="<?php echo get_the_permalink();?>">
        <?php
       
             $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true );
             $logo = get_theme_mod( 'custom_logo' );
             $image = wp_get_attachment_image_src( $logo , 'full' );
             $image_url = $image[0];
             $image_width = $image[1];
             $image_height = $image[2];
           
             if($featured_img[0]){
                 echo '<img  loading="lazy" src="'.$featured_img[0] .'" width="'. $featured_img[1].' height="'. $featured_img[2].'" alt="'.$featured_img[3].'" />';
             }else{
                 echo '<img loading="lazy" src="'.$image_url .'" alt="'.get_bloginfo('name').' - '. get_the_title() .'" />';
             }
    
        ?>
        </a>
        </div>
        <?php  if($desing==1):  ?>
        <div  class="notice-category">
        <?php
        $terms = get_the_terms( get_the_ID(), 'programa_taxonomy' );
        
       
       foreach ( $terms as $term) {
        $color = get_field('color_de_la_categoria', $term);
        echo   '<h5 style="background:'. $color .';"><a style="color:white;" href="'.get_term_link($term->slug, 'programa_taxonomy').'">'. $term->name.'</a></h5>';
       }
            
        
        ?>
        </div>
        <?php endif; ?>
        
    </div>
    <div class="notice-text ">
        <?php  
        if($title && $desing==1):
        ?>
    <h4> <a href="<?php echo get_the_permalink();?>"><?php echo get_the_title(); ?></a> </h4>
    <?php 
       
        endif;
        if($desing==2):?>
      
        <?php
        $terms = get_the_terms( get_the_ID(), 'programa_taxonomy' );
        
       
       foreach ( $terms as $term) {
        $color = get_field('color_de_la_categoria', $term);
        echo '<div class="notice-data" style="background:'. $color .';">';
        echo   '<h5 > <a href="'.get_term_link($term->slug, 'programa_taxonomy').'">'. $term->name.'</a></h5>';
        echo'<h4> <a href="'.get_the_permalink().'">'.get_the_title().'</a> </h4>';
        
       }
            
        
        ?>
           
        </div>
        <?php
        endif;
        ?>
        <?php
        if($excerpt):
        ?>
        <a href="<?php echo get_the_permalink();?>" class="notice-excerpt">
            <?php echo cesde_custom_excerpts(411); ?>
        </a>
        <?php  
        endif;
        if($link):
        ?>
        <div class="notice-link"><a href="<?php echo get_the_permalink();?>">Continuar Leyendo</a></div>
        <?php  
         endif;
        ?>
    </div>
</article>
