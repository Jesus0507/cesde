<?php
function cesde_calendar_time_function($atts){
    ob_start();
    ?>
<div id="calendar-home-wrapper">
    <div class="swiper-wrapper">
        <div class="swiper-slide calender-home-content">
        <?php
        // get posts
        $the_query = new WP_Query(array(
            'post_type'			=> 'cesde_shedule',
            'posts_per_page'	=> -1,
            'meta_key'			=> 'fecha_del_evento',
            'orderby'			=> 'meta_value',
            'order'				=> 'DESC'
        ));

            if( $the_query ):
            while( $the_query->have_posts() ) : $the_query->the_post(); 
        $date_time= get_field('fecha_del_evento');
        $date_time_exploded = explode('/',$date_time);
        $single_date=$date_time_exploded[1];
        $months = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
                ?>
        <article class="calendar-item">
            <div class="show-calendar-time">
            <span class="short-month">
                <?php
            
                if( $single_date[0]=='0'){
                    echo substr($months[$single_date[1]-1],0,3) ;
                }else{
                    echo  substr($months[$single_date-1],0,3) ;
                } 
                    ?>
                </span>
                <div class="show-day"><?php echo $single_date; ?></div>
            </div>
            <div class="show-calendar-text">
                <h4 class="show-calendar-title"><?php echo get_the_title(); ?></h4>
                <div class="show-calendar-content">
                <?php echo get_the_content(); ?>
                </div>
            </div>   
            
            </article>
        <?php
        endwhile;
        wp_reset_postdata(); 
        endif;
        ?>
        </div>
    </div>
    <div class="swiper-scrollbar"></div>
</div>
    <?php
    return ob_get_clean();
}