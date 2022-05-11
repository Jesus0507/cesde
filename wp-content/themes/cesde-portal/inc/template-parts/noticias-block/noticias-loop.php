<?php
/**
 * noticias's archive and taxonomy template 
 */
?>


    <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
   if (is_tax()) {
     # code...
     $term= get_queried_object();
    
  
     $args =array(
      'post_type'			=> 'cesde_noticias',
      'posts_per_page'	=> 6,
      'paged' => $paged,
      'orderby'			=> 'date',
      'tax_query' => array(
        array(
          'taxonomy'=>'programa_taxonomy',
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
      'post_type'			=> 'cesde_noticias',
      'posts_per_page'	=> 6,
      'paged' => $paged,
      'orderby'			=> 'date',
      'order'				=> 'DESC'
  );

  $the_query = new WP_Query($args);
   }
   
  
        if( $the_query ):
        echo '<section role="navigate" area-label="lista de las noticias" class="noticias-archive"> ';
        while( $the_query->have_posts() ) : $the_query->the_post(); 
    ?>
      <?php  
    set_query_var( 'notices_item_settings', [
        'title'=>true,
        'excerpt'=>true,
        'link'=>true,
        'desing'=>2
      ]    );
    get_template_part( 'inc/template-parts/noticias-block/noticias', 'item'  );?>
  <?php
      
        endwhile;
        echo '</section>';
 echo '<section class="pagination-wrapper">';

        $total_pages = $the_query->max_num_pages;
        
        if ($total_pages > 1){
          
          $current_page = max(1, get_query_var('paged'));
          
          echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('<'),
            'next_text'    => __('>'),
          ));
        }
echo '</section>';    
      endif;
      wp_reset_postdata(); 
    
    
    ?>
    
