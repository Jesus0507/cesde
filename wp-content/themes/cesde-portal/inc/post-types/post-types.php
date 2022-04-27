<?php
//echo __DIR__ .'/post-types/post-types.php';
if (file_exists( __DIR__ .'/escuelas.php')) {
require_once  __DIR__ .'/escuelas.php';
}
if (file_exists( __DIR__ .'/sedes.php')) {
    require_once  __DIR__ .'/sedes.php';
    }
if (file_exists( __DIR__ .'/noticias.php')) {
    require_once  __DIR__ .'/noticias.php';
}
if (file_exists( __DIR__ .'/programas.php')) {
    require_once  __DIR__ .'/programas.php';
}
if (file_exists( __DIR__ .'/time-line.php')) {
    require_once  __DIR__ .'/time-line.php';
}
if (file_exists( __DIR__ .'/calendar.php')) {
    require_once  __DIR__ .'/calendar.php';
}
?>