<?php

    class CesdeCatalogoPage{
        public $wrapper;
        public $button_text;
        /**
         * Class constructor.
         */
        public function __construct($wrapper,$button_text,$title)
        {
            $this->wrapper = $wrapper;
            $this->button_text = $button_text;
            $this->title = $title;
        }
       

        public function cesde_catalogo_page()
        {
            //cesde_sedes_config
           $option = $this->wrapper;
           $option_data = get_option($option);
           $action = 'cesde_archive_config';
           $security = wp_create_nonce('cesde_archive_config');
          
             ?>
             
            <div id="<?php echo $option; ?>" class="container-cesde">
                <h1 class="h1 text-center ">  Configuración pagina  <?php echo $this->title;?> </h1>
                <div class="row">
                    <form id="cesde_sedes_config_form" enctype="multipart/form-data" action="" method="post">
                        <div class="row form-row-margin">
                            <h3 class="mb-2" style="text-align:center;">Sección header</h3>
                            <input type="hidden" name="action" id="action" value="<?php  echo  $action; ?>">
                            <input type="hidden" name="option" id="option" value="<?php echo $option; ?>">
                            <input type="hidden" name="security" id="security" value="<?php echo $security; ?>">
                            <div class="col-12">
                                <div id="image-wrapper">
                                   <?php
                                   if ( $option_data['front_image']) {
                                       $image= wp_get_attachment_image_src($option_data['front_image'],true)[0];
                                      echo ' <img src="'.$image .'" alt="cesde" style="width:auto;max-height:350px;" class="image-fluid custom_media_image">';
                                   } else {
                                    echo ' <img src="'.get_stylesheet_directory_uri() .'/assets/img/logo.png" alt="cesde"  style="width:auto;max-height:350px;" class="image-fluid custom_media_image">';
                                   }
                                   ?>
                                </div>
                                <div class="row mb-1">
                                    <p style="text-align:center;" > Añade la imagen en el header</p>
                                    <div class="col-12 d-flex  justify-content-center align-items-center" style="gap:20px;">
                                        <input type="hidden" 
                                            id="front_image" name="front_image" class="custom_media_url" value="<?php echo $option_data['front_image'];?>">
                                        <input type="button" 
                                            class="button button-secondary taxonomy_media_button" 
                                            id="front_image_button" name="front_image_button" 
                                            value="<?php _e( 'Añadir imagen', 'taxt-domain' ); ?>">
                                        <input type="button" 
                                            class="button button-secondary taxonomy_media_remove" 
                                            id="front_image_remove" name="front_image_remove" 
                                            value="<?php _e( 'Remove  imagen', 'taxt-domain' ); ?>">
                                    </div>
                                </div>
                            </div>
                           
        
                        </div>
                        <div class="row form-row-margin" >
                        <h3  style="text-align:center" > Texto de la sección </h3>
                            <div class="col-6">
                             
                                <label for="titulo" class="form-label" style="display:block;">Titulo del catalogo</label>
                                <input type="text" class="form-control" id="titulo" placeholder="Titulo del catalogo" value="<?php echo $option_data['titulo']; ?>">
                            </div>
                            <div class="col-6 d-flex justify-content-center align-items-center">
                                <div class="">   
                                    <label for="color_editor" class="form-label" style="display:block;">Color del titulo</label>
                                    <?php 
                                    $color = $option_data['color_editor']!=''?$option_data['color_editor']:'#000000' ;
                                    ?>
                                    <input type="text" id="color_editor" class="mi-plugin-color-field" data-default-color="<?php echo  $color; ?>" value="<?php echo  $color; ?>" />
                                </div>
                            </div>
                            <div class="col-12" style="padding-top:20px;">
                            <label for="meta_content_editor" class="form-label" style="display:block;">Texto de la sección</label>
                            <?php
                          $content   =  $option_data['meta_content_editor']!=''?$option_data['meta_content_editor']:'' ;
        
                            wp_editor($content, 'meta_content_editor', array(
                                    'wpautop'               => true,
                                    'media_buttons' =>      true,
                                    'textarea_name' =>      'meta_content_editor',
                                    'textarea_rows' =>      10,
                                    'teeny'                 =>  true
                            ));
                    ?>	
                            </div>
                        </div>
                        <div class="row form-row-margin justify-content-center align-items-center">
                        <div class="col-8">
                        <h3  style="text-align:center" >  Sección "Call to action" </h3>
                            <label for="template_section" class="form-label" style="display:block;">Agregar elementor shortcode template "Plantillas>Plantillas guardadas" <br> "Shortcode" tomar el id del template = [elementor-template id="<b><u>528</u></b>"] </label>
                            <?php
                            $template = $option_data['template_section']!=''?$option_data['template_section']:'';
                            ?>
                                    <input type="text" class="form-control" id="template_section" value="<?php echo $template;?>" placeholder='408'>
                        </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                           <?php submit_button(  $this->button_text ); ?>
                        </div>
                    </form>
                </div>
                <div  class="saving-data" style="display:none;" >
                    <div class="saving"></div>
                </div>
            </div>
            <?php
        }
        
    }
