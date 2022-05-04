<?php

function cesde_config_init_page()
{
    # code...
    ?>
  <div  class="container-cesde">
        <h1 class="h1 text-center ">  Configuraciones Cesde </h1>
        <div class="row form-row-margin">
            <?php
            echo' <img src="'.get_stylesheet_directory_uri() .'/assets/img/logo.png" alt="cesde" class="image-fluid">';
            
            ?>
        </div>
        <div class="row">
         <div class="col-12  d-flex  justify-content-center align-items-center" style="gap:20px;">
         <?php
          $sitios = [
           'Escuelas'=> 'configurar_catalogo_escuelas',
            'Sedes'=>'configurar_catalogo_sedes',
            'Noticias'=>'configurar_catalogo_noticias'
          ];
            foreach ($sitios as $key => $value) {
             echo '<a class="e-button e-button" href="'.admin_url().'admin.php?page='.$value.'">'.$key.'</a>';
            }
          ?>
         </div>
        </div>
  </div>
    <?php
}



if(!function_exists('cesde_archives_wp_option_data')){
    function cesde_archives_wp_option_data(){
        $security = $_POST['security'];
        $option = $_POST["option"];
        $action = $_POST['action'];
      unset($_POST['security'], $_POST["option"],$_POST['action']);
       
   /*    foreach ( $_POST as $key => &$value ) {
        $value = sanitize_text_field($value);
      } */
        
        if (check_ajax_referer( 'cesde_archive_config','security' )) {
            # code...
         $data = serialize($_POST);
           
       //  $save_content = wp_options( $option,$data );
       $update=update_option($option,$_POST,false);
      wp_send_json_success($update,200);
        }else{
            echo 'Fail';
        }
        wp_die();
    }
    add_action('wp_ajax_cesde_archive_config', 'cesde_archives_wp_option_data');
  add_action('wp_ajax_nopriv_cesde_archive_config', 'cesde_archives_wp_option_data');
}
