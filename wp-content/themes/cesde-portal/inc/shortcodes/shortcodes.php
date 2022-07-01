<?php
require_once __DIR__ . '/social-links.php';
require_once __DIR__ . '/slider.php';
require_once __DIR__ . '/breadcumb.php';
require_once __DIR__ . '/show_time_line.php';
require_once __DIR__ . '/cat_escuelas.php';
require_once __DIR__ . '/sedes_section.php';
require_once __DIR__ . '/notice_section.php';
require_once __DIR__ .  '/calendar_time.php';
require_once __DIR__ . '/sedes_adress.php';

//social-links.php
add_shortcode( 'social-Link', 'social_link_funtcion' );
//slider.php
add_shortcode( 'cesde_get_slider', 'function_cesde_get_slider' );
//breadcumb
add_shortcode( 'cesde_breadcumb_show', 'cesde_breadcumb_function' );
//show_time_line.php
add_shortcode( 'cesde_show_time_line', 'cesde_function_time_line' );
//sedes_section.php
add_shortcode('sedes_section_show','cesde_sedes_section');
//cat_escuelas.php
add_shortcode('cat_escuelas_show', 'cesde_cat_escuelas');
//notice_section.php
add_shortcode('notices_section_show', 'cesde_notices_section_function');
//calendar_time.php
add_shortcode('calendar_time_show', 'cesde_calendar_time_function');
//sedes_adress.php
add_shortcode('sedes_adress','cesde_address_function');

?>