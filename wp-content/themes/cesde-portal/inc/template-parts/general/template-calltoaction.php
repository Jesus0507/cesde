<section class="calltoaction">
      <?php
      global $arg;
       $templatePart = explode('\"',$arg['template']) ;
     
      //[elementor-template id=\"528\"]
    echo  do_shortcode('[elementor-template id="'. $templatePart[1].'"]' );
      ?> 
</section>