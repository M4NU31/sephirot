<?php
if(!defined('access')) die();

define('__PATH_TEMPLATE_ROOT__', __DIR__ . '/');

// Carga el “motor” del template (el que imprime módulos)
if(file_exists(__PATH_TEMPLATE_ROOT__ . 'inc/template.functions.php')){
  require_once(__PATH_TEMPLATE_ROOT__ . 'inc/template.functions.php');
}

// Ahora carga tu layout (header/sidebar + wrapper)
require_once(__PATH_TEMPLATE_ROOT__ . 'views/layout.php');
