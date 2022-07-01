<?php
function cesde_cat_escuelas($atts){
    ob_start();
    ?>
    <section class="escuelas-cat-show" area-label="navigation">
        <?php
          $the_query = new WP_Query(array(
            'post_type'			=> 'cesde_escuelas',
            'posts_per_page'	=> -1,
          
            'orderby'			=>  array( 'title' => 'ASC'),
            'order'				=> 'ASC'
        ));

            if( $the_query ):
            while( $the_query->have_posts() ) : $the_query->the_post(); 
            $color = get_field('color_de_la_escuela')?'style="background:'. get_field('color_de_la_escuela').';"':'style="background:#BB5CD5;"';
            ?> 
             <article class="escuela-tax-container" <?php echo  $color; ?>  >
              <a href="<?php echo get_the_permalink( );?>"  class="escuela-tax-wrapper">
                  <h3 class="category-name">
                      <?php
                            echo get_the_title();
                        ?>
              </h3>
              <div class="link-indicator"><i  <?php echo $color; ?> class="fa fa-arrow-right"></i></div>
  
              </a>
              <div class="after"></div>
          </article>
            <?php
            endwhile;
            wp_reset_postdata();
            endif;
            ?>
    </section>
    <?php
    return ob_get_clean();
}