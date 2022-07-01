<?php

function cesde_address_function($atts){


    $atts = shortcode_atts(
		array(
			'version' => 'list',
		),
		'sedes_adress'
	);
    $args = array(  
        'post_type' => 'cesde_sedes',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC',
        
    );
    $version = $atts['version'];
    ob_start();
    ?>
    <section class="cesde_address_<?php echo $version; ?>">
        <?php
         $loop = new WP_Query( $args ); 
        
         while ( $loop->have_posts() ) : $loop->the_post(); 
         
         if('data_de_la_ubicacion'): 
            get_template_part( 'inc/template-parts/sedes/sedes', 'address_item' );
         endif;
        endwhile;
    
        wp_reset_postdata(); 
        ?>
    </section>
    <?php
    return ob_get_clean();
}