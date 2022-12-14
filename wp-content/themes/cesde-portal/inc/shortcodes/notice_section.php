<?php

function cesde_notices_section_function($atts){
    
	// Attributes
	$atts = shortcode_atts(
		array(
			'version' => 'grid',
		),
		$atts,
		'notices_section_show'
	);
    $version= $atts['version'];
    ob_start();
    ?>
    <section class="information ">
        
        <h3 class="information__subtitle"> <span>Todas las noticias</span> </h3>
      <?php if($version=='grid'): ?>
        <div class="information_grid">
            <div class="information_content">
            
            <?php
       // get posts
       $the_query = new WP_Query(array(
        'post_type'			=> 'cesde_noticias',
        'posts_per_page'	=> 3,
        
        'orderby'			=> 'name',
        'order'				=> 'DESC'
    ));

        if( $the_query ):
          $count=0;
        while( $the_query->have_posts() ) : $the_query->the_post(); 
        if ($count==0) {
          ?>
         <div class="left-side">
         
          <?php   
          set_query_var( 'notices_item_settings', [
            'title'=>true,
            'excerpt'=>true,
            'link'=>true,
            'desing'=>1
          ]    );
          get_template_part( 'inc/template-parts/noticias-block/noticias', 'item');?>
         </div>
         <div class="right-side">
          <?php
        }elseif($count==1){
          set_query_var( 'notices_item_settings', [
            'title'=>true,
            'excerpt'=>false,
            'link'=>false,
            'desing'=>1
          ]    );
           
         get_template_part( 'inc/template-parts/noticias-block/noticias', 'item');
        }elseif($count==2){
          set_query_var( 'notices_item_settings', [
            'title'=>true,
            'excerpt'=>false,
            'link'=>false,
            'desing'=>1
          ]    );
        
        
          get_template_part( 'inc/template-parts/noticias-block/noticias', 'item');
          echo '</div>';
        }
        $count++;
          ?>
<?php
      endwhile;
    endif;
    ?>
            
            </div>
        </div>
        
       

      <?php
      wp_reset_postdata();
      endif;
      ?>
    </section>
    <?php

    return ob_get_clean();
}