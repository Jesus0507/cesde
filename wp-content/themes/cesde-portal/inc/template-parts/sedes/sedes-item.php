<?php

echo '<article class="sede-item">';
$featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true );
 
$icon = get_field('icono_de_la_sede');
 ?>
 <a href="<?php echo get_permalink(); ?>" role="navigation" area-label="sedes enlace" title="<?php echo "ir a sede ". get_field('ciudad'); ?>" class="sede-wrapper">
     <div class="sede-images">
         <img src="<?php echo $featured_img[0]; ?>" alt="<?php get_field('ciudad'); ?>">
         
     </div>
     <div class="sede-text">
         <div class="sede-icon">
           <img src="<?php echo $icon['url']; ?>" alt="<?php get_field('ciudad'); ?>">
        </div>
         <h3 class="sede-title">
             <?php echo get_field('ciudad'); ?>
         </h3>
         <address class="sede-direction"> <?php echo get_field('direccion'); ?> </address>
         <p class="sede-referencia"> <?php echo get_field('referencia_de_la_direccion'); ?> </p>
         <p class="sede-descripcion_adicional"> <?php echo get_field('descripcion_adicional'); ?> </p>
     </div>
 </a>
     
     <?php 
 echo '</article>';