<?php
/**
 * Index.
 *
 * @package Page Builder Framework
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

$grid_gap = get_theme_mod( 'sidebar_gap', 'medium' );

get_header();

?>
<div id="content" class="cesde-post">
    
   <?php
   
echo '<div class="sedes-breadcumb">';
bcn_display($return = false, $linked = true, $reverse = false, $force = false);
echo '</div>';
   ?>
    <div class="cesde-notices-container">

 
    <main role="main" class="cesde-escuelas" property="escuelas" area-label="main" >
        <?php
      
            
        while ( have_posts() ) : the_post(); 
        ?>
      <article class="cesde-articulo-noticia" area-label="content" role="article" >
          <div class="images-section" role="banner">
              <?php
                $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true );
                $logo = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $logo , 'full' );
                $image_url = $image[0];
                $image_width = $image[1];
                $image_height = $image[2];
              
                if($featured_img[0]){
                    echo '<img  loading="lazy" src="'.$featured_img[0] .'" width="'. $featured_img[1].' height="'. $featured_img[2].'" alt="'.$featured_img[3].'" />';
                }else{
                    echo '<img loading="lazy" src="'.$image_url .'" alt="'.get_bloginfo('name').' - '. get_the_title() .'" />';
                }
                ?>
              
           </div>
           <div class="noticias-seccion-contenido">
              
                <div class="noticias-meta">
                    <?php
                    $terms = get_the_terms( get_the_ID(), 'programa_taxonomy' );
                    foreach ( $terms as $term) {
                        $color = get_field('color_de_la_categoria', $term);
                        echo   '<h2 style="background:'. $color .';"><a style="color:white;" href="'.get_term_link($term->slug, 'programa_taxonomy').'">'. $term->name.'</a></h2>';
                    }
                    ?>
                <h1 class="noticias-title"><?php echo get_the_title();?></h1>
                <time class="cesde-noticia-time"><?php $date = get_the_date(); echo $date;?></time>
                </div>
                <div class="noticias-content">
                    <?php the_content(); ?>
                </div>
           </div>
      </article>
      
    <ul class="cesde-prev-next-notices">
    <li class="page-item previus">
                <?php previous_post_link( '%link', '<i class="fas fa-arrow-left"></i> <h3> %title</h3>' ); ?>
            </li>
        <li class="page-item next">
            <?php next_post_link( '%link', '<h3> %title</h3><i class="fas fa-arrow-right"></i> ' ); ?>
            </li>
           
    </ul>

           <?php 
            
        endwhile;
    
       
        ?>
    </main>
    <aside role="navigation" class="lista de noticias">
        <?php
        $current_post= get_the_ID();
 $the_query = new WP_Query(array(
    'post_type'			=> 'cesde_noticias',
    'posts_per_page'	=> 3,
    
    'orderby'			=> 'name',
    'order'				=> 'DESC'
));

    if( $the_query ):
    
        while( $the_query->have_posts() ) : $the_query->the_post(); 
        set_query_var( 'notices_item_settings', [
            'title'=>true,
            'excerpt'=>false,
            'link'=>false,
            'desing'=>1
          ]    );
         if($current_post !== get_the_ID()){
             get_template_part( 'inc/template-parts/noticias-block/noticias', 'item');
         }
        endwhile;
    endif;
    wp_reset_postdata(); 
        ?>
    </aside>
    </div>
</div>

<?php get_footer(); ?>