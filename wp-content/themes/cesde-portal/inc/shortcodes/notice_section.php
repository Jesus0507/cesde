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
        'posts_per_page'	=> -1,
        
        'orderby'			=> 'name',
        'order'				=> 'DESC'
    ));

        if( $the_query ):
        while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                hola
        <?php
        endwhile;
        endif;
        ?>
            </div>
        </div>
        
      <?php
        else:
            ?>
         
         <?php
       // get posts
       $the_query = new WP_Query(array(
        'post_type'			=> 'cesde_noticias',
        'posts_per_page'	=> -1,
        
        'orderby'			=> 'name',
        'order'				=> 'DESC'
    ));

        if( $the_query ):
        while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php
        endwhile;
        endif;
        ?>


      <?php
      wp_reset_postdata();
      endif;
      ?>
    </section>
    <?php

    return ob_get_clean();
}