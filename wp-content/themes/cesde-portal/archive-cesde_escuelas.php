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
$escuela_data = get_option( 'cesde_escuela_config' );


?>
<header class="catalogo-section">
   <?php
    if($escuela_data['front_image']):
        $featured_img = wp_get_attachment_image_src($escuela_data['front_image'],'full',true);
           
             $image_url = $image[0];
             $image_width = $image[1];
             $image_height = $image[2];
   ?>
    <div class="header-image">
      
        <img src="<?php echo $featured_img[0]; ?>" alt=" <?php echo $escuela_data['titulo']; ?>">
    </div>
   <?php
   endif;
   ?>
    <div class="header-text">
        <h1 class="header-title">
            <?php echo $escuela_data['titulo']; ?>
        </h1>
        <div class="header-text-content">
            <?php echo $escuela_data['meta_content_editor']; ?>
        </div>
    </div>
</header>
<section role="navigate" area-label="lista de las sedes" class="escuelas-archive">
<?php
while ( have_posts() ) : the_post(); 
?>
 <?php if('data_de_la_ubicacion'): 
       
       get_template_part( 'inc/template-parts/escuelas/escuelas', 'item' );

       endif; ?>
<?php
     
    endwhile;
    
   // wp_reset_postdata(); 
    ?>
  

   </section> 
  <?php 
  ///template-calltoaction.php
  if($escuela_data['template_section']){
      $arg = [
          'template'=> $escuela_data['template_section'] 
        ];
      get_template_part( 'inc/template-parts/general/template', 'calltoaction', );
  }
   ?>
</div>

<?php get_footer(); ?>