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


    
while (have_posts() ) : the_post(); 
?>
<section class="banner__sedes"  area-label="banner">
    <div class="banner__sedes__image">
        <?php
          
            $featured_img = get_field('imagen_banner');
             $logo = get_theme_mod( 'custom_logo' );
             $image = wp_get_attachment_image_src( $logo , 'full' );
             $image_url = $image[0];
             $image_width = $image[1];
             $image_height = $image[2];
           
             if($featured_img){
              
                 $alt= $featured_img['alt']?$featured_img['alt']:get_the_title();
                 echo '<img loading="lazy" src="'.$featured_img['url'] .'" width="'. $featured_img['width'].' height="'. $featured_img['height'].'" alt="'. $alt.'" />';
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
<main role="main"  area-label="content" itemprop="main">
    <div class="cesde-single-main">
        <section class="form__section">
                  
                
                  <?php
                  $form_title = get_field('titulo_introduccion_del_programa');
                  $form_text = get_field('explicacion_del_programa');
                  $form_subtitle =get_field('presentacion_del_programa');
                  if($form_title!=='' || $form_text!==''){
                      echo '<article class="form__text">';
                      if($form_title!==''){
                       echo '<h2 class="form__text__title">'. $form_title.'</h2>'; 
                      }
                     
                     
                      if($form_title!==''){
                        echo '<h3 class="form__text__subtitle">'. $form_subtitle.'</h3>'; 
                       }
                         
                     if($form_text !== ''){
                     echo  '<div class="form__text__content">'.$form_text.'</div>';
                     }
                     echo '</article>';
                  }
                 ?>
                  <?php
                  $form = get_field('formulario');
                  echo ' <article class="form">'. do_shortcode( "$form" ).'</article>' ;
                  ?>
        </section>
    </div>
    <div class="cesde-single-main">
        <section class="matricula__section">
            <?php if(get_field('titulo_matriculacion')): ?>
            <h2 class="matricula__title">
                <?php 
                echo get_field('titulo_matriculacion');
                ?>
            </h2>
            <?php endif; ?>
           <?php if(get_field('opciones_de_matricula')): ?>
              <div class="opciones-matricula">
                  <?php 
                    while(the_repeater_field('opciones_de_matricula')):
                        while(the_repeater_field('opcion_de_matricula')):
                          
                      ?>
                          <article class="row-matricula">
                             <div class="opciones-row">
                                  <a
                                      class="opcion-llamada"  
                                      href="<?php echo get_sub_field('url_de_la_opcion'); ?>" 
                                      target="_blank" 
                                      rel="noopener noreferrer">
                                      <?php echo get_sub_field('titulo_de_la_opcion'); ?>
                                  </a>
                             </div>
                             <div class="opciones-row">
                                  <a
                                      class="opcion-enlinea"  
                                      href="<?php echo get_sub_field('url_opcion_en_linea'); ?>" 
                                      target="_blank" 
                                      rel="noopener noreferrer">
                                      Matricúlate en línea
                                  </a>
                             </div>
                          </article>
                      <?php
                        endwhile;
                    endwhile;
                  ?>
              </div>
        <?php endif; ?>
        </section>
    </div>
      
      <section class="especificaciones" <?php  if(get_field('fondo_especificaciones_del_curso')){ echo 'style="background:'.get_field('fondo_especificaciones_del_curso').';"'; } ?>>
        <div class="cesde-single-main">
            <div class="especificaciones-row">
                
                <div class="desktop espec-section">
                    <?php if(get_field('titulo_especificaciones')): ?>
                    <h2 class="espec-title">
                        <?php
                        echo get_field('titulo_especificaciones');
                        ?>
                    </h2>
                    <?php endif; ?>
                    <?php if(get_field('subtitulo_de_especificaciones')): ?>
                    <h3 class="espec-subtitle">
                    <?php
                        echo get_field('subtitulo_de_especificaciones');
                        ?>
                    </h3>
                    <?php endif; ?>
                    <?php if(get_field('imagen_especificaciones')): ?>
                    <div class="espec-image">
                        <img src="  <?php
                        echo get_field('imagen_especificaciones')['url'];
                        ?>" alt="  <?php
                        echo get_field('imagen_especificaciones')['alt'];
                        ?>">
                    </div>
                    <?php endif; ?>
                </div>
                <div class="espec-section">
                    <?php if(get_field('texto_especificaciones')): ?>
                        <div class="desktop espec-text">
                            <?php
                                echo get_field('texto_especificaciones');
                            ?>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field('especificaciones')): ?>
                        <ul class="espec-list">
                            <?php
                               while(the_repeater_field('especificaciones')):
                            ?>
                                <li class="espec-item">
                                    <?php if(get_sub_field('imagen_especificacion')): ?>
                                        <div class="spec-image">
                                            <img src="<?php echo get_sub_field('imagen_especificacion')['url'];?>" 
                                            alt="<?php if(get_sub_field('imagen_especificacion')['alt']){ 
                                                echo get_sub_field('imagen_especificacion')['alt'];
                                                }else{ 
                                                    echo get_the_title();
                                                    }?>">
                                        </div>
                                    <?php endif; ?>  
                                    <?php if(get_sub_field('texto_especificacion')): ?>  
                                        <div class="espec-list-text">
                                           <?php echo  get_sub_field('texto_especificacion'); ?>
                                        </div>
                                    <?php endif; ?>
                                </li>
                            <?php
                            endwhile;
                            ?>
                        </ul>
                    <?php endif; ?>
                    <div class="espec-button">
                        <?php if(get_field('texto_boton_credito') && get_field('url_del_boton_del_credito')):  ?>
                            <a href=" <?php echo  get_field('url_del_boton_del_credito'); ?>"
                            class="credit-button" 
                            target="_blank" rel="noopener noreferrer"> 
                            <?php echo  get_field('texto_boton_credito'); ?>
                        
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                
            </div>
        </div>
      </section>
      <div class="cesde-single-main">
            <section class="programas-tabs">
                <?php  
                $slug_base = 'inc/template-parts/programas-block/tab';
                set_query_var('slug','inc/template-parts/programas-block/tabs-contents/tab');
                    get_template_part( $slug_base, 'wrapper');
                ?> 
                 <?php  
                    get_template_part( $slug_base, 'desktop');
                ?>            
            </section>
      </div>
      <section class="program-footer">
        <div class="program-footer-content">
            <?php
            echo get_field('texto_informativo_inferior');
            ?>
        </div>
      </section>
</main>
<?php
     
    endwhile;
    
    wp_reset_postdata(); 
    ?>
</div>

<?php get_footer(); ?>