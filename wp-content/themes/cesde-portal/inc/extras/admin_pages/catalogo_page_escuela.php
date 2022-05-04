<?php

function cesde_catalogo_page_escuela()
{
    $escuelas =new  CesdeCatalogoPage('cesde_escuela_config','Guardar configuración','escuelas');
    $escuelas->cesde_catalogo_page();
}