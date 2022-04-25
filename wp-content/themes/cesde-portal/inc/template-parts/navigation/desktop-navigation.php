<nav id="desktop-navigation" 
    itemscope="itemscope" 
    itemtype="https://schema.org/SiteNavigationElement" 
    aria-label="<?php _e( 'Site Navigation', 'page-builder-framework' ); ?>">
<?php
$args = array(
	'theme_location'=>'main_menu',
    'container'=>'',
    'menu_class'=>'cesde-menu'
    
);
wp_nav_menu($args);
?>
</nav>