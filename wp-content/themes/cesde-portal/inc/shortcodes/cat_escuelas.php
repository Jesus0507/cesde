<?php
function cesde_cat_escuelas($atts){
    ob_start();
    ?>
    <section class="escuelas-cat-show" area-label="navigation">
        <?php
        
        $terms = get_terms( array(
            'taxonomy' => 'cesde_programas_taxonomy',
            'hide_empty' => true,
          ) );
          foreach ($terms as $term){
            $term_link = get_term_link( $term );
            $color = get_field('color_de_la_categoria_de_la_etiqueta', $term);
          ?>
          <article class="escuela-tax-container" <?php echo 'style="background:'. $color.';"'; ?>  >
              <a href="<?php echo $term_link;?>"  class="escuela-tax-wrapper">
                  <h3 class="category-name">
                      <?php
                            echo $term->name;
                        ?>
              </h3>
              <div class="link-indicator"><i  <?php echo 'style="background:'. $color.';"'; ?> class="fa fa-arrow-right"></i></div>
  
              </a>
              <div class="after"></div>
          </article>
          <?php
          }
        ?>

      
    </section>
    <?php
    return ob_get_clean();
}