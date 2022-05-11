<?php 
    // Add Shortcode
function function_cesde_get_slider( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'campo' => 'imagenes_del_home',
		),
		$atts,
		'cesde_get_slider'
	);
    ob_start();
    ?>
   
    <section  area-label="banner" class="banner-home">
       
        <div id="banner-slider" class="swiper">
  <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <?php
        $images = get_field('imagenes_del_home');
        if( $images ):
            foreach($images as $image):
                /*
                <img data-src="path/to/picture-1.jpg" class="swiper-lazy" />
      <div class="swiper-lazy-preloader"></div>
                */
                echo '<div class="swiper-slide">';
                echo '<img loading="lazy" src="'.$image['sizes']['large'].'" alt="'.$image['alt'].'" class="swiper-lazy" style="width:100%;" >';
             
                echo '</div>';
            endforeach;
        endif;
        ?>
            </div>
  <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

        </div>
    </section>
    <?php
    return ob_get_clean();
}

?>