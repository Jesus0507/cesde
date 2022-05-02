<?php

function cesde_catalogo_page_sedes()
{
   
    $nds_add_meta_nonce = wp_create_nonce( 'hero_typed_ajax' );
    ?>
    <div class="container">
        <h1 class="h1 text-center mt-2 mb-4">  Configuración pagina de archivo de Sedes </h1>
        <div class="row">
            <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
                <div class="row mb-2">
                    <h2 class="display-2">Elije un banner</h2>
                    <div class="col-8">
                        <div id="image-wrapper">
                            
                        </div>
                    </div>
                    <div class="col-4">
                    <input type="hidden" id="front_image" name="front_image" class="custom_media_url" value="">
                    <input type="button" class="button button-secondary taxonomy_media_button" id="front_image_button" name="front_image_button" value="<?php _e( 'Add front image', 'taxt-domain' ); ?>">
<input type="button" class="button button-secondary taxonomy_media_remove" id="front_image_remove" name="front_image_remove" value="<?php _e( 'Remove front image', 'taxt-domain' ); ?>">
                    </div>

                </div>
                <div class="row mb-2">
                    <h2>Titulo del Catalogo</h2>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="text" class="form-control" id="titulo">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
}