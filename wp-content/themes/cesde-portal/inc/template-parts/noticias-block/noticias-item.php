<?php
/**
 * template_part noticias-item
 */

?>
<article class="noticias-item">
    <a href="<?php echo get_the_permalink();?>">
    <div class="noticias-image">
        <div class="image">
        <?php
             $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true );
             $logo = get_theme_mod( 'custom_logo' );
             $image = wp_get_attachment_image_src( $logo , 'full' );
             $image_url = $image[0];
             $image_width = $image[1];
             $image_height = $image[2];
           
             if($featured_img[0]){
                 echo '<img src="'.$featured_img[0] .'" width="'. $featured_img[1].' height="'. $featured_img[2].'" alt="'.$featured_img[3].'" />';
             }else{
                 echo '<img src="'.$image_url .'" alt="'.get_bloginfo('name').' - '. get_the_title() .'" />';
             }
    
        ?>
        </div>
        <div  class="notice-category">
        <?php
        $terms = get_the_terms( get_the_ID(), 'programa_taxonomy' );
        
       
       foreach ( $terms as $term) {
        $color = get_field('color_de_la_categoria', $term);
        echo   '<h5 style="background:'. $color .';">'. $term->name.'</h5>';
       }
            
        
        ?>
        </div>
        </a>
    </div>
    <div class="notice-text">
    <h4> <a href="<?php echo get_the_permalink();?>"><?php echo get_the_title(); ?></a> </h4>
        <a href="<?php echo get_the_permalink();?>" class="notice-excerpt">
            <?php echo cesde_custom_excerpts(411); ?>
        </a>
        <div class="notice-link"><a href="<?php echo get_the_permalink();?>">Continuar Leyendo</a></div>
    </div>
</article>
