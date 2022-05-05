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
<?php
     
    endwhile;
    
   // wp_reset_postdata(); 
    ?>
    
</div>

<?php get_footer(); ?>