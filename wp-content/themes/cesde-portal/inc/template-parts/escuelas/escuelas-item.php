<?php
/**
 * Template part  escuela's item
 */
?>
<article class="escuela-item">
    <a href="<?php echo get_the_permalink(); ?>" class="escuela-wrapper">
    <?php
    $color_de_la_escuela = get_field('color_de_la_escuela')? get_field('color_de_la_escuela'):'var(--pink)';
    ?>
        <div class="escuela-image" style="background-color:<?php echo $color_de_la_escuela; ?>;">
            <?php
             $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true );
             $logo = get_theme_mod( 'custom_logo' );
             $image = wp_get_attachment_image_src( $logo , 'full' );
             $image_url = $image[0];
             $image_width = $image[1];
             $image_height = $image[2];
            ?>
            <?php
            if($featured_img[0]):
            ?>
            <img src="<?php echo $featured_img[0];?>"   alt="<?php echo get_the_title(); ?>" />
            <?php
            endif;
            ?>
        </div>
        <div class="escuela-text">
            <h2 class="escuela-titulo">
                <?php echo get_the_title(); ?>
            </h2>
            <div class="escuela-button" style="background-color:<?php echo $color_de_la_escuela; ?>;">
            Conoce más
            <div class="after"></div>
            </div>
        </div>
    </a>
</article>