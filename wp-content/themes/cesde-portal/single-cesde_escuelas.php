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
    
    <main role="main" class="cesde-escuelas" property="escuelas" area-label="main" >
        <?php
      
            
        while ( have_posts() ) : the_post(); 
        ?>
        <section class="banner" area-label="banner" >
            <article class="banner__text">
                <h1 class="banner__title" area-label="title" >
                    <?php
                    echo get_the_title();
                    ?>
                    </h1>
                    <?php
                      $subtitle = get_field('subtilulo_del_la_escuela');
                      if($subtitle){
                          echo '<h2 class="banner__subtitle">';
                            echo $subtitle;
                          echo '</h2>';
                         }  
                        ?>
                        <?php
                        $content_banner = get_the_content();
                      if($content_banner !== ''){
                        echo '<div class="banner__text">';
                        echo $content_banner;
                    echo '</div>';
                      }
                        ?>

                </article>
                <article class="banner__image">
                    <?php
                    $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true );
                    $logo = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $logo , 'full' );
                    $image_url = $image[0];
                    $image_width = $image[1];
                    $image_height = $image[2];
                  
                    if($featured_img[0]){
                        echo '<img src="'.$featured_img[0] .'" width="'. $featured_img[1].' height="'. $featured_img[2].'" alt="'.$featured_img[3].'" />';
                    }else{
                        echo '<img src="'.$image_url .'" alt="'.get_bloginfo('name').' - '. get_the_title() .'" />';
                    }
                    ?>
                    
                </article>
           </section>
           <section class="form__section">
              
                   <?php
                   $form = get_field('formulario');
                   echo ' <article class="form">'. do_shortcode( "$form" ).'</article>' ;
                   ?>
                   <?php
                   $form_title = get_field('titulo_segunda_seccion');
                   $form_text = get_field('contenido_segunda_seccion');
                   if($form_title!=='' || $form_text!==''){
                       echo '<article class="form__text">';
                       if($form_title!==''){
                        echo '<h2 class="form__text__title">'. $form_title.'</h2>'; 
                       }
                          
                      if($form_text !== ''){
                      echo  '<div class="form__text__content">'.$form_text.'</div>';
                      }
                      echo '</article>';
                   }
                  ?>
           </section>
           <div class="click-programa">
               <?php
               $click = get_field('al_click_items', $post->ID);
              
               $click_title = get_field('click_title');
               
             
                if( $click){
                    echo '<section class="click">';
                        if($click_title){
                            echo '<h2 class="click__title">'. $click_title .'</h2>';
                        }
                        while( the_repeater_field('al_click_items',  $post->ID) ){
                            $image = get_sub_field('imagen') ;
                            $title = get_sub_field('titulo_del_item_click');
                            $text = get_sub_field('agregar_texto_del_item_click');
                            $url=get_sub_field('url_del_click');
                           echo '<article class="click__item">';
                           if($url){
                              echo '<a href="'.$url.'" title="'.$title.'">'; 
                           }
                           echo '<div class="click__item__image"><img src="'.$image['url'].'"></div>';
                           echo '<h3 class="click__item__title">';
                           echo $title;
                           echo '</h3>';
                           echo '<div class="click__item__text">'.$text.'</div>';
                           if($url){
                            echo '</a>'; 
                         }
                           echo '</article>';
                        }

                   echo ' </section>';
                }
               ?>
               <section class="programas" area-label="programas">
                  <?php
                    $programa_title = get_field('nuestros_programas_tecnicos');
                    if($programa_title){
                        echo '<h2 class="programas__title">Nuestros Programas Técnicos</h2>';
                        ?>
                        <div id="cesde-accordeon" class="programas__accordeon">
                            <?php
                            while( the_repeater_field('nuestros_programas_tecnicos',  $post->ID) ){
                                ?>
                                <article  class="programas__accordeon__item" area-label="item del programa" >
                                    <div class="programas__accordeon__item__title">
                                        <h3>
                                            <?php 
                                                echo get_sub_field('titulo_de_seccion'); 
                                            ?>
                                            <i class="fa-solid fa-plus"></i>
                                        </h3>
                                    </div>
                                   <div class="acordeon__content">
                                   <div class="programas__accordeon__item__content">
                                        <div class="programas__accordeon__item__image">
                                            <img src="<?php echo get_sub_field('imagen_programa')['url'] ?>" 
                                            alt="<?php if(get_sub_field('imagen_programa')['alt']){ echo get_sub_field('imagen_programa')['alt']; }else{ echo get_sub_field('titulo_de_seccion');} ?>">
                                        </div>
                                        <div class="programas__accordeon__item__text">
                                            
                                            
                                            <div class="programas__accordeon__item___text__content">
                                                <?php
                                               if( get_sub_field('contenido_del__programa')){
                                                   echo '  <div class="text__content">'.
                                                   get_sub_field('contenido_del__programa')
                                               .'</div>';
                                              
                                               }
                                                    ?>
                                                    <?php
                                                        if(get_sub_field('boton_del_programa')){
                                                    echo '<div class="text_button"> <a href="'.get_sub_field('boton_del_programa').'" >Ver Programa</a></div>';
                                                        }
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                </article>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                  ?>
               </section>
            </div>
            <section class="information">
               <?php
               if(get_field('texteo')):
               ?>
                <h2 class="information__title"><?php echo get_field('texteo'); ?></h2>
               <?php
               endif;
               ?>
                <?php
               if(get_field('titulo_noticias')):
               ?>
               <div class="information__text">
                   <?php
                   echo get_field('titulo_noticias');
                   ?>
               </div>
               <?php
               endif;
               ?>
               <h3 class="information__subtitle"> <span>Todas las noticias</span> </h3>
            </section>
           <?php 
          
         
           
        endwhile;
    
        wp_reset_postdata(); 
        ?>
    </main>
</div>

<?php get_footer(); ?>