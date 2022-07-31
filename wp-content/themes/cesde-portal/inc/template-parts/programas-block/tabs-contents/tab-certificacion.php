
<div class="certificaciones">
<?php 
 if (get_field('texto_certificacion') ) {
    echo '<div class="certificaciones-superior-content">'; 
        echo get_field('texto_certificacion');  
    echo '</div>';
}
?>
<?php
    if (get_field('certificados') ) {
        echo '<div class="certificados-list">';
            while(have_rows('certificados')): the_row();
            
                $certificado_text = get_sub_field('texto_boton_certificado');
                $certificado_link = get_sub_field('url_archivo_certificado');
              
                    if($certificado_link || $certificado_link !==''){
                        echo  '<a class="certificado-item" href="'.$certificado_link.'" >'.$certificado_text.'</a>'; 
                    }else{
                        echo  '<div class="certificado-item">'.$certificado_text.'</div>';
                    }
                   
               
            endwhile;
        echo '</div>';
    }
    ?>
<?php 
 if (get_field('bloque_inferior_de_certificados')) {
    echo '<div class="certificaciones-footer-content">'; 
        echo get_field('bloque_inferior_de_certificados');  
    echo '</div>';
}
?>
</div>