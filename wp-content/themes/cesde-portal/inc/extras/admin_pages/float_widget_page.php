<?php

function cesde_float_widget_options()
{
  ?>
     <div id="<?php echo $option; ?>" class="container-cesde">
                <h1 class="h1 text-center ">  Configuración widget flotante </h1>
                <div class="row">
                    <form id="cesde_sedes_config_form" enctype="multipart/form-data" action="" method="post">
                        <div class="row">
                            
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                           <?php submit_button(  'Guardar configuración' ); ?>
                        </div>
                    </form>
                </div>
                <div  class="saving-data" style="display:none;" >
                    <div class="saving"></div>
                </div>
            </div>
  <?php
}