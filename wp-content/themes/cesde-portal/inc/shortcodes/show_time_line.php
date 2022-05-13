<?php

function cesde_function_time_line($atts){
    ob_start();
    ?>
   <div class="cesde_time_line">
       <div class="button-wrpper">
        <div class="time-line-prev"></div>
        <div class="time-line-next"></div>
       </div>
       <div id="cesde_time_line_container">
           <div class="swiper-wrapper">
               <?php
               $args = array(  
                'post_type' => 'time_line',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'title', 
                'order' => 'ASC',
                
            );
            
            
            
            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); 
               ?>
               <div class="swiper-slide time-line">
                   <div class="time__line__container">
                       <div class="time__line__header">
                            <h3 class="time__line__year">
                                <?php
                                    echo get_the_title();
                                ?>
                            </h3>
                            <h4 class="time__line__title">
                              <?php  echo get_field('titulo_del_evento'); ?>
                            </h4>
                            <div class="time__line__icon">
                                <img loading="lazy" src=" <?php  echo get_field('icono_de_tiempo')['url']; ?>" alt=" <?php  echo  get_the_title(); ?>">
                            </div>
                       </div>
                       <div class="time__line__content">
                           <div class="time__line__content__wrapper">
                               <div class="time__line__content__image">
                                   <?php
                                    $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($loop->ID), 'full', true );
                                  
                                    $image_url = $featured_img[0];
                                    $image_width = $featured_img[1];
                                    $image_height = $featured_img[2];
                                    
                                   ?>
                                   <img loading="lazy" src="<?php echo  $image_url; ?>" alt="<?php echo  get_field('titulo_del_evento'); ?>">
                                </div>
                                <div class="time__line__content__text">
                                    <div class="text">
                                        <?php
                                        the_content();
                                        ?>
                                    </div>
                                </div>
                           </div>
                       </div>

                   </div>

               </div>
               <?php
            endwhile;
               ?>
           </div>

       </div>
   </div>
    <?php
     wp_reset_postdata(); 
    return ob_get_clean();
}