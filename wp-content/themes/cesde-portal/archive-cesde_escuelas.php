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
$header_data = get_option( 'cesde_escuela_config' );
get_template_part( 'inc/template-parts/general/general', 'header',$header_data  );
?>
<section role="navigate" area-label="lista de las escuelas" class="escuelas-archive">
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
      get_template_part( 'inc/template-parts/general/template', 'calltoaction',  $arg );
  }
   ?>
</div>

<?php get_footer(); ?>