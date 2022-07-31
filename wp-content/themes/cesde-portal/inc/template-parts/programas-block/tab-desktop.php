<?php
$slug = get_query_var( 'slug' );
?>
<div class="tabs-wrapper-desktop">
    <?php  if(get_field('activar_pestana_nivel')):  ?>
        <div class="tab-element-desktop">
          <div class="aprender-wrapper">
          <?php  
                get_template_part( $slug , 'aprender');
            ?> 
          </div>
        </div>
    <?php  endif; ?>
    <?php  if(get_field('activar_pestana_modelo')):  ?>
        <div class="tab-element-desktop">
            <?php  
                get_template_part( $slug , 'modelo');
            ?> 
        </div>
    <?php  endif; ?>
    <?php  if(get_field('activar_requisito')):  ?>
        <div class="tab-element-desktop">
            <?php  
                get_template_part( $slug , 'requisito');
            ?> 
        </div>
    <?php  endif; ?>
    <?php  if(get_field('activar_convenios')):  ?>
        <div class="tab-element-desktop">
            <?php  
                get_template_part( $slug , 'convenios');
            ?> 
        </div>
    <?php  endif; ?>
    <?php  if(get_field('activar_certificacion')):  ?>
        <div class="tab-element-desktop">
            <?php  
                get_template_part( $slug , 'certificacion');
            ?> 
        </div>
    <?php  endif; ?>
    <?php  if(get_field('activar_viaja_vive_aprende')):  ?>
        <div class="tab-element-desktop">
            <?php  
                get_template_part( $slug , 'viveaprende');
            ?> 
        </div>
    <?php  endif; ?>
</div>