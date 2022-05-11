<div class="nav-preheader-component">
    <button id="preheader-button">
	Menú &nbsp; <i class="fa-solid fa-caret-down"></i> 
	</button>
    <nav id="preheader-navigation" 
        itemscope="itemscope" 
        itemtype="https://schema.org/SiteNavigationElement" 
        aria-label="navegacion superior">
        <?php
		$args = array(
			'theme_location'=>'preheader_menu',
			'container'=>'',
			'menu_class'=>'cesde-preheader-menu',
			

		);
		wp_nav_menu($args);
		?>
    </nav>
</div>