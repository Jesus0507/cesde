<?php
$icon = get_field('icono_de_la_sede');
?>
<article class="cesde__direction" >
<a title="ir a  <?php echo get_field('ciudad'); ?>" role="link" href="<?php echo get_the_permalink();?>">

  
  <div class="sede-icon">
    <img src="<?php echo $icon['url']; ?>" alt="<?php get_field('ciudad'); ?>">
  </div>
  <address class="sede-direction">
   
  <h3 class="sede-title">
    <?php echo get_field('ciudad'); ?>
  </h3>
  <p class="address" > <?php echo get_field('direccion'); ?> </p>
  <p class="sede-referencia"> <?php echo get_field('referencia_de_la_direccion'); ?> </p>

  </address>
</a>
</article>