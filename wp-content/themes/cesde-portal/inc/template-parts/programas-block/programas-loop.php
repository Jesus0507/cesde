<?php
/**
 * noticias's archive and taxonomy template 
 */
?>

<section class="sedes-list">

  <div class="sedes-oferta-list">
    <button class="sede-item" data-sede="todos" >Todas las sedes</button>
   <?php
        $sede = new WP_Query(array(
          'post_type'			=> 'cesde_sedes',
          'posts_per_page'	=> -1,
        
          'orderby'			=>  array( 'title' => 'ASC'),
          'order'				=> 'ASC'
      ));

    if(  $sede ):
    while(  $sede->have_posts() ) :  $sede->the_post(); 
    echo  '<button class="sede-item" data-sede="'.$post->post_name.'">'.get_field('ciudad',$post->ID).'</button>';
    endwhile;
    wp_reset_postdata();
    endif;
   ?>
  </div>
  <script>
    var sedes = ["todos",<?php 
       $sedes = new WP_Query(array(
        'post_type'			=> 'cesde_sedes',
        'posts_per_page'	=> -1,
      
        'orderby'			=>  array( 'title' => 'ASC'),
        'order'				=> 'ASC'
    ));

  if(  $sedes ):
  while(  $sedes->have_posts() ) :  $sedes->the_post(); 
  
  
  echo  '"'.$post->post_name.'",';
  endwhile;
  wp_reset_postdata();
  endif;
    
    ?>];
    </script>
</section>
    <?php
    
   if (is_tax()) {
     # code...
     $term= get_queried_object();
    
  
     $args =array(
      'post_type'			=> 'cesde_programas',
      'posts_per_page'	=> -1,
    
      'orderby'			=> 'date',
      'tax_query' => array(
        array(
          'taxonomy'=>'cesde_programas_taxonomy',
          'field'=> 'slug',
          'terms'=>$term->slug
        ),

      ) ,
      'order'				=> 'DESC'
  );

  $the_query = new WP_Query($args);
   } else {
  //  echo $paged;
    $args =array(
      'post_type'			=> 'cesde_programas',
      'posts_per_page'	=> -1,
     
      'orderby'			=> 'date',
      'order'				=> 'DESC'
  );

  $the_query = new WP_Query($args);
   }
   
  
        if( $the_query ):
        echo '<section role="navigate" area-label="lista de nuestros programas" id="nuestros-programas"  class="programa-list"> ';
        while( $the_query->have_posts() ) : $the_query->the_post(); 
    ?>
      <?php  
    set_query_var( 'notices_item_settings', [
        'title'=>true,
        'excerpt'=>true,
        'link'=>true,
        'desing'=>2
      ]    );
    get_template_part( 'inc/template-parts/programas-block/programas', 'item'  );?>
  <?php
      
        endwhile;
    //  echo '<div class="sizer-nuestros-programas"></div>';
      echo '</section>'; 
      endif;
      wp_reset_postdata(); 
    
    
    ?>
    
