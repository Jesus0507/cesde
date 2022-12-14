<?php
function cesde_sedes_section($atts){
    ob_start();
    ?>
   <section class="sedes-directions">
       <div id="sedes-swiper" class="sedes-content">
       <div class="sedes-container swiper-wrapper">

       
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
       echo '<div class="swiper-slide">';
        get_template_part( 'inc/template-parts/sedes/sedes', 'item' );
       echo '</div>';

        endif; ?>
    <?php
     
    endwhile;
    
    wp_reset_postdata(); 
    ?>
    </div>
    </div>
    <div class="sedes-button-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"/></svg></div>
  <div class="sedes-button-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/></svg></div>
   </section>
    <?php
    return ob_get_clean();

}

