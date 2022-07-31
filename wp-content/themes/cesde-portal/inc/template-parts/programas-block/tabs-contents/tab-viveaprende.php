<div class="viveaprende">
<?php 
 if (get_field('texto_pestana_viaja_vive_aprende') ) {
    echo '<div class="viveaprende-superior-content">'; 
        echo get_field('texto_pestana_viaja_vive_aprende');  
    echo '</div>';
}
?>
<?php
    if (get_field('botones_pestana_viaja_vive_aprende') ) {
        echo '<div class="viveaprende-list">';
            while(have_rows('botones_pestana_viaja_vive_aprende')): the_row();
            
                $certificado_text = get_sub_field('titulo_del_botonn');
                $certificado_link = get_sub_field('enlace_del_boton_viaja_vive_aprende');
              
                    if($certificado_link || $certificado_link !==''){
                        echo  '<a class="viveaprende-item" href="'.$certificado_link.'" >'.$certificado_text.'</a>'; 
                    }else{
                        echo  '<div class="viveaprende-item">'.$certificado_text.'</div>';
                    }
                   
               
            endwhile;
        echo '</div>';
    }
    ?>
<?php 
 if (get_field('bloque_inferior_viaja_vive_aprende')) {
    echo '<div class="viveaprende-footer-content">'; 
        echo get_field('bloque_inferior_viaja_vive_aprende');  
    echo '</div>';
}
?>
</div>