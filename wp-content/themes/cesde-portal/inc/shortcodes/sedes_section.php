<?php
function cesde_sedes_section($atts){
    ob_start();
    ?>
   <section class="sedes-directions">
       <div class="sedes-content">
       <div class="sedes-container">

       
       <?php
       $args = array(  
        'post_type' => 'cesde_sedes',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC',
        
    );
    
    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
    <?php if('data_de_la_ubicacion'): 
       
        get_template_part( 'inc/template-parts/sedes/sedes', 'item' );

        endif; ?>
    <?php
     
    endwhile;
    
    wp_reset_postdata(); 
    ?>
    </div>
    </div>
   </section>
    <?php
    return ob_get_clean();

}

