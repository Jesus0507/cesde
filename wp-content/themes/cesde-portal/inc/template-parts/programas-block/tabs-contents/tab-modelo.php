<?php
?>
<div class="model-wrapper">
    <h3 class="model-title">
            <?php
                echo get_field('titulo_seccion_modelo');
            ?>
    </h3>
    <div class="model-content">
        <div class="model-left-content">
            <?php
                echo get_field('texto_bloque_izquierdo');
            ?>
        </div>
        <div class="model-right-content">
            <?php
                echo get_field('texto_bloque_derecho');
            ?>
        </div>
        
    </div>
    <div class="model-bottom-content">
        <?php
            echo get_field('texto_inferior');
        ?>
    </div>

</div>