<?php

function cesde_catalogo_page_noticias()
{
    $escuelas =new  CesdeCatalogoPage('cesde_noticias_config','Guardar configuración','noticias');
    $escuelas->cesde_catalogo_page();
}