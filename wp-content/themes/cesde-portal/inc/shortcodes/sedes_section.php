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
   echo '<article class="sede-item">';
   while(the_repeater_field('data_de_la_ubicacion')):
    
   
    ?>
    <a href="<?php echo get_permalink(); ?>" role="navigation" area-label="sedes enlace" title="<?php echo "ir a sede ". get_sub_field('titulo_de_la_ubicacion'); ?>" class="sede-wrapper">
        <div class="sede-images">
            <img src="<?php echo get_sub_field('imagen_de_la_sede')['url']; ?>" alt="<?php get_sub_field('titulo_de_la_ubicacion'); ?>">
            
        </div>
        <div class="sede-text">
            <div class="sede-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="106.12" height="106.12" viewBox="0 0 106.12 106.12">
  <defs>
    <filter id="Elipse_4" x="0" y="0" width="106.12" height="106.12" filterUnits="userSpaceOnUse">
      <feOffset dy="3" input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur"/>
      <feFlood flood-opacity="0.161"/>
      <feComposite operator="in" in2="blur"/>
      <feComposite in="SourceGraphic"/>
    </filter>
  </defs>
  <g id="Grupo_8" data-name="Grupo 8" transform="translate(-232.685 -2010.42)">
    <g transform="matrix(1, 0, 0, 1, 232.68, 2010.42)" filter="url(#Elipse_4)">
      <g id="Elipse_4-2" data-name="Elipse 4" transform="translate(9 6)" fill="#fff" stroke="#ee2b7b" stroke-width="2">
        <circle cx="44.06" cy="44.06" r="44.06" stroke="none"/>
        <circle cx="44.06" cy="44.06" r="43.06" fill="none"/>
      </g>
    </g>
    <path id="Icon_awesome-city" data-name="Icon awesome-city" d="M43.313,13.5H33.75V1.688A1.687,1.687,0,0,0,32.063,0H21.938A1.687,1.687,0,0,0,20.25,1.688V6.75h-4.5V1.125A1.125,1.125,0,0,0,14.625,0H13.5a1.125,1.125,0,0,0-1.125,1.125V6.75h-4.5V1.125A1.125,1.125,0,0,0,6.75,0H5.625A1.125,1.125,0,0,0,4.5,1.125V6.75H1.688A1.687,1.687,0,0,0,0,8.438V33.75A2.25,2.25,0,0,0,2.25,36h40.5A2.25,2.25,0,0,0,45,33.75V15.188A1.687,1.687,0,0,0,43.313,13.5ZM9,28.406a.844.844,0,0,1-.844.844H5.344a.844.844,0,0,1-.844-.844V25.594a.844.844,0,0,1,.844-.844H8.156A.844.844,0,0,1,9,25.594Zm0-6.75a.844.844,0,0,1-.844.844H5.344a.844.844,0,0,1-.844-.844V18.844A.844.844,0,0,1,5.344,18H8.156A.844.844,0,0,1,9,18.844Zm0-6.75a.844.844,0,0,1-.844.844H5.344a.844.844,0,0,1-.844-.844V12.094a.844.844,0,0,1,.844-.844H8.156A.844.844,0,0,1,9,12.094Zm9,13.5a.844.844,0,0,1-.844.844H14.344a.844.844,0,0,1-.844-.844V25.594a.844.844,0,0,1,.844-.844h2.813a.844.844,0,0,1,.844.844Zm0-6.75a.844.844,0,0,1-.844.844H14.344a.844.844,0,0,1-.844-.844V18.844A.844.844,0,0,1,14.344,18h2.813a.844.844,0,0,1,.844.844Zm0-6.75a.844.844,0,0,1-.844.844H14.344a.844.844,0,0,1-.844-.844V12.094a.844.844,0,0,1,.844-.844h2.813a.844.844,0,0,1,.844.844Zm11.25,6.75a.844.844,0,0,1-.844.844H25.594a.844.844,0,0,1-.844-.844V18.844A.844.844,0,0,1,25.594,18h2.813a.844.844,0,0,1,.844.844Zm0-6.75a.844.844,0,0,1-.844.844H25.594a.844.844,0,0,1-.844-.844V12.094a.844.844,0,0,1,.844-.844h2.813a.844.844,0,0,1,.844.844Zm0-6.75A.844.844,0,0,1,28.406,9H25.594a.844.844,0,0,1-.844-.844V5.344a.844.844,0,0,1,.844-.844h2.813a.844.844,0,0,1,.844.844ZM40.5,28.406a.844.844,0,0,1-.844.844H36.844A.844.844,0,0,1,36,28.406V25.594a.844.844,0,0,1,.844-.844h2.813a.844.844,0,0,1,.844.844Zm0-6.75a.844.844,0,0,1-.844.844H36.844A.844.844,0,0,1,36,21.656V18.844A.844.844,0,0,1,36.844,18h2.813a.844.844,0,0,1,.844.844Z" transform="translate(263 2043)" fill="none" stroke="#ee2b7b" stroke-width="2"/>
  </g>
</svg></div>
            <h3 class="sede-title">
                <?php echo get_sub_field('titulo_de_la_ubicacion'); ?>
            </h3>
            <address class="sede-direction"> <?php echo get_sub_field('direccion'); ?> </address>
            <p class="sede-referencia"> <?php echo get_sub_field('referencia_de_la_ubicacion'); ?> </p>
        </div>
    </a>
        
        <?php endwhile;
    echo '</article>';
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

