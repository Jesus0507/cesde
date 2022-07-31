
<div class="convenios">
    <?php 
    if (get_field('bloque_convenio_superior')) {
        echo '<div class="convenios-superior-content">'; 
            echo get_field('bloque_convenio_superior');  
        echo '</div>';
    }
    ?>
    <?php
    if (get_field('lista_de_convenios') ) {
        echo '<div class="convenios-list">';
            while(have_rows('lista_de_convenios')): the_row();
            
                $convenio_title = get_sub_field('titulo_del_convenio');
                $convenio_content = get_sub_field('texto_del_convenio');
                echo '<div class="convenio-item">';
                    if($convenio_title || $convenio_content !==''){
                        echo  '<h3 class="convenio-title">'.$convenio_title.'</h3>'; 
                    }
                    if($convenio_content || $convenio_content !==''){
                        echo  '<div class="convenio-content">'.$convenio_content.'</div>'; 
                    }
                echo '</div>'; 
            endwhile;
        echo '</div>';
    }
    ?>
     <?php 
    if (get_field('bloque_texto_convenio')) {
        echo '<div class="convenios-footer-content">'.get_field('bloque_texto_convenio').'</div>';
    }
    ?>
    
   
</div>