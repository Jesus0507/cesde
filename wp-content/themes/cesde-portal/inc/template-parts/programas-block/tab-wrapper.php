<?php
$slug = get_query_var( 'slug' );
?>
<div class="tabs-wrapper">
    <?php  if(get_field('activar_pestana_nivel')):  ?>
        <div class="tab-element">
            <div class="tab-title">
                <h2>
                    Lo que vas <br> aprender en Cesde
                </h2>
            </div>
            <div class="tab-content">
                <?php  
                get_template_part( $slug, 'aprender');
                ?>
            </div>
        </div>
    
    <?php  endif; ?>
    <?php  if(get_field('activar_pestana_modelo')):  ?>
        <div class="tab-element">
            <div class="tab-title">
                <h2>
                    Nuevo Modelo <br class="no-mobile"> Educativo
                </h2>
            </div>
            <div class="tab-content">
                <?php  
                get_template_part( $slug, 'modelo');
                ?>
            </div>
        </div>
    <?php  endif; ?>
    <?php  if(get_field('activar_requisito')):  ?>
        <div class="tab-element">
            <div class="tab-title">
                <h2>
                    Requisitos
                </h2>  
            </div>
            <div class="tab-content">
                <?php  
                get_template_part( $slug, 'requisito');
                ?>
            </div>
        </div>
    <?php  endif; ?>
    <?php  if(get_field('activar_convenios')):  ?>
        <div class="tab-element">
            <div class="tab-title">
                <h2>
                    Convenios
                </h2>  
            </div>
            <div class="tab-content">
                <?php  
                get_template_part( $slug, 'convenios');
                ?>
            </div>
        </div>
    <?php  endif; ?>
    <?php  if(get_field('activar_certificacion')):  ?>
        <div class="tab-element">
            <div class="tab-title">
                <h2>
                    <?php
                    echo get_field('titulo_certificacion');
                    ?>
                </h2>  
            </div>
            <div class="tab-content">
                <?php  
                get_template_part( $slug, 'certificacion');
                ?>
            </div>
        </div>
    <?php  endif; ?>
    <?php  if(get_field('activar_viaja_vive_aprende')):  ?>
        <div class="tab-element">
            <div class="tab-title">
                <h2>
                Viaja, Vive,<br class="no-mobile"> Aprende
                </h2>  
            </div>
            <div class="tab-content">
                <?php  
                get_template_part( $slug, 'viveaprende');
                ?>
            </div>
        </div>
    <?php  endif; ?>
</div>