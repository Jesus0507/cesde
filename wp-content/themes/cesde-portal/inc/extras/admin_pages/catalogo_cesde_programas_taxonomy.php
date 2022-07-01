<?php

function cesde_page_programas_taxonomy()
{
    $escuelas =new  CesdeCatalogoPage('cesde_programas_config','Guardar configuración','programas');
    $escuelas->cesde_catalogo_page();
}