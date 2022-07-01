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
$header_data = get_option( 'cesde_programas_config' );
get_template_part( 'inc/template-parts/general/general', 'header',$header_data  );
get_template_part( 'inc/template-parts/programas-block/programas', 'loop'  );
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