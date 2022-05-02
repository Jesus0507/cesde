<?php
function cesde_breadcumb_function($atts){
    ob_start();
    echo '<div class="sedes-breadcumb">';
    bcn_display($return = false, $linked = true, $reverse = false, $force = false);
    echo '</div>';
    return ob_get_clean();
}