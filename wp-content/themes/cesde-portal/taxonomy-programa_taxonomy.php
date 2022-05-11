<?php
/**
 * Index.
 *
 * @package Page Builder Framework
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );



get_header();

?>

<div id="content">
<?php 


echo '<div class="sedes-breadcumb">';
bcn_display($return = false, $linked = true, $reverse = false, $force = false);
echo '</div>';
$header_data = get_option( 'cesde_noticias_config' );
get_template_part( 'inc/template-parts/general/general', 'header',$header_data  );
get_template_part( 'inc/template-parts/noticias-block/noticias', 'loop'  );
?>
 <?php    
  ///template-calltoaction.php
  if($header_data['template_section']){
    $arg = [
        'template'=> $header_data['template_section'] 
      ];
    get_template_part( 'inc/template-parts/general/template', 'calltoaction', $arg);
}
 ?>  
</div>

<?php get_footer(); ?>