<?php

function cesde_catalogo_page_sedes()
{
   $sedes =new  CesdeCatalogoPage('cesde_sedes_config','Guardar configuración','Sedes');
   $sedes->cesde_catalogo_page();  
}