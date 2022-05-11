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

<div id="content">
<?php 


echo '<div class="sedes-breadcumb">';
bcn_display($return = false, $linked = true, $reverse = false, $force = false);
echo '</div>';
  
while ( have_posts() ) : the_post(); 
?>
<section class="banner__sedes"  area-label="banner">
    <div class="banner__sedes__image">
        <?php
             $featured_img = get_field('imagen_del_header');
             $logo = get_theme_mod( 'custom_logo' );
             $image = wp_get_attachment_image_src( $logo , 'full' );
             $image_url = $image[0];
             $image_width = $image[1];
             $image_height = $image[2];
           
             if($featured_img['url']){
                 $alt = $featured_img['alt']!=''?$featured_img['alt']: get_the_title();
                 echo '<img loading="lazy" src="'.$featured_img['url'] .'" width="'. $featured_img['width'].' height="'. $featured_img['height'].'" alt="'.$alt.'" />';
             }else{
                 echo '<img loading="lazy" src="'.$image_url .'" alt="'.get_bloginfo('name').' - '. get_the_title() .'" />';
             }
    
        ?>
    </div>
    <div class="banner__sedes__text">
        <div class="banner__sedes_wrapper">
        <h1 class="text__title">
             <?php
             echo get_the_title();
             ?>
        </h1>
        <div class="text__subtitle">
             <?php
             echo get_the_content();
             ?>
        </div>
        </div>
    </div>
</section>

    <main role="main" class="cesde-single-main" area-label="content" itemprop="main">
    <section class="form__section">
              
            
              <?php
              $form_title = get_field('titulo_presentacion_de_la_sede');
              $form_text = get_field('presentacion_de__la_sede');
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
              <?php
              $form = get_field('codigo_del_formulario');
              echo ' <article class="form">'. do_shortcode( "$form" ).'</article>' ;
              ?>
      </section>
      <section class="sedes__programas" area-label="programas">
          <div class="sedes__programas__text">
              <h2 class="programas__title">
              <?php echo get_field('titulo_del_programa_de_la_sede'); ?>
              </h2>
              <div class="programas__text">
                 <?php echo get_field('contenido_del_programa_de_la_sede'); ?>
              </div>
              <div class="accordeon__section">
              <?php
                    $programa_title = get_field('programas_de_la_sede');
                    if($programa_title){
                      //  echo '<h2 class="programas__title">Nuestros Programas Técnicos</h2>';
                        ?>
                        <div id="cesde-accordeon" class="programas__accordeon">
                            <?php
                            while( the_repeater_field('programas_de_la_sede',  $post->ID) ){
                                ?>
                                <article  class="programas__accordeon__item" area-label="item del programa" >
                                    <div class="programas__accordeon__item__title">
                                        <h3>
                                            <?php 
                                                echo get_sub_field('titulo_del_programa'); 
                                            ?>
                                            <i class="fa-solid fa-plus"></i>
                                        </h3>
                                    </div>
                                   <div class="acordeon__content">
                                   <div class="programas__accordeon__item__content">
                                        <div class="programas__accordeon__item__image">
                                            <img src="<?php echo get_sub_field('imagen_del_programa')['url'] ?>" 
                                            alt="<?php if(get_sub_field('imagen_del_programa')['alt']){ echo get_sub_field('imagen_del_programa')['alt']; }else{ echo get_sub_field('titulo_del_programa');} ?>">
                                        </div>
                                        <div class="programas__accordeon__item__text">
                                            <div class="row__text__accordeon">
                                           
                                                <?php 
                                                if(get_sub_field('titulo_de_la_escuela')){
                                                    ?>
                                                     <h4 class="escuela" 
                                                     <?php
                                                     if(get_sub_field('color_fondo_del_titulo_de_la_escuela')){
                                                            echo 'style="background-color:'.get_sub_field('color_fondo_del_titulo_de_la_escuela').'"';
                                                     }
                                                     ?>
                                                     >
                                                   <?php echo get_sub_field('titulo_de_la_escuela'); ?>
                                                    </h4>
                                                    <?php
                                                }
                                                ?>
                                               
                                                </div>
                                         
                                            <div class="programas__accordeon__item___text__content">
                                                <?php
                                               if( get_sub_field('contenido_del_programa')){
                                                   echo '  <div class="text__content">'.
                                                   get_sub_field('contenido_del_programa')
                                               .'</div>';
                                              
                                               }
                                                    ?>
                                                    <?php
                                                        if(get_sub_field('url_del_programa')){
                                                    echo '<div class="text_button"> <a href="'.get_sub_field('url_del_programa').'" >Ver Programa</a></div>';
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
              </div>
          </div>
      </section>
      <section class="planea__futuro">
          <?php
          if(get_field('titulo_planea')){
            ?>
            <h2 class="planea__title">
                <?php
                print get_field('titulo_planea');
                ?>
            </h2>
            <?php
          }
          if(get_field('subtitulo_planea')):
          ?>
          <h3 class="planea__subtitle">
          <?php
                print get_field('subtitulo_planea');
                ?>
          </h3>
          <?php endif; ?>
          <?php
          
          if(get_field('texto_planea')):
          ?>
          <div class="planea__text">
          <?php
                print get_field('texto_planea');
                ?>
          </div>
          <?php endif; ?>
          <?php
          
          if(get_field('caracteristicas_de_planes')):
            $count1=0;
            echo '<div  id="planes__wrapper" class="planes__container">';
            echo '<div  class="planes__wrapper">';
            while( the_repeater_field('caracteristicas_de_planes',  $post->ID) ):
                $count1++;
             echo '<article class="plan__article">';
              echo '<div class="count"><span>'.$count1.'</span></div>';
              echo '<ul class="plan__caract">';
              while( the_repeater_field('listado_de_caracteristicas_de_planes',  $post->ID) ):
                
                echo '<li class="caract">' .get_sub_field('caracteristica'). '</li>';
              endwhile;
              echo '</ul>';
             echo '</article>';
                
          ?>
                <?php endwhile; 
                echo '</div>';
             
                echo '</div>';
                echo '<div class="planes__navigate"><i id="trigger_left" onclick="slide(\'left\',\'#planes__wrapper\')" class="fa-solid fa-arrow-left"></i> <i id="trigger_right" onclick="slide(\'right\',\'#planes__wrapper\')" class="fa-solid fa-arrow-right"></i></div>';
                ?>
                
           <?php endif; ?>
      </section>
    </main>
<?php
     
    endwhile;
    
   // wp_reset_postdata(); 
    ?>
</div>

<?php get_footer(); ?>