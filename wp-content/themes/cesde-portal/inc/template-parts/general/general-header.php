<?php
global $header_data ;
 
$section_up = $header_data['front_image']!==''?'section-up':'';
?>
<header class="catalogo-section">
   <?php
    if($header_data['front_image']):
        $image = wp_get_attachment_image_src($header_data['front_image'],'full',true);
           
             $image_url = $image[0];
             $image_width = $image[1];
             $image_height = $image[2];
             $alt = $image[3]!=''? $image[3]: $header_data['titulo'];
   ?>
    <div class="header-image">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $alt; ?>"  width="<?php echo   $image_width; ?>"  height="<?php echo   $image_height; ?>">
    </div>
   <?php
   endif;
   ?>
    <div class="header-text <?php echo $section_up;?>" >
        <h1 style="color:<?php echo $header_data['color_editor'];?>;" class="header-title">
            <?php echo $header_data['titulo']; ?>
        </h1>
        <div class="header-text-content">
            <?php echo  str_replace(
    '\"',
    '',
    $header_data['meta_content_editor'],
    
            ); ?>
        </div>
    </div>
</header> 