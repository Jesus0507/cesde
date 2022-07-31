<?php
?>
<div class="level-learnings">
    <?php
    if(get_field('niveles')):
        while( have_rows('niveles') ): the_row(); 
            $nivel_title = get_sub_field('nombre_del_nivel');
            $nivel_list = get_sub_field('caracteristicas_del_nivel');
   
        ?>
        <div class="level-item">
            <h3 class="level-title">
                <?php echo  $nivel_title; ?>
            </h3>
            <div class="level-body">
                <ul class="learning-list">
                    <?php
                    if(get_sub_field('caracteristicas_del_nivel')):
                        while( have_rows('caracteristicas_del_nivel') ): the_row(); 
                        $texto_de_la_caracteristica= get_sub_field('texto_de_la_caracteristica');
                        echo "<li class='learning-item'>{$texto_de_la_caracteristica}</li>";
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    <?php
        endwhile;
    endif;
    ?>
</div>