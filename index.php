<?php
/**
 * Sephirot Template Entry
 * WebEngine normalmente carga el template y su layout. Si tu core espera un index.php, este es.
 */
if(!defined('access')) die();

// WebEngine suele definir __PATH_TEMPLATE_ROOT__ en runtime. Si no existe, calcula relativo.
if(!defined('__PATH_TEMPLATE_ROOT__')){
  define('__PATH_TEMPLATE_ROOT__', dirname(__FILE__) . '/');
}
include(__PATH_TEMPLATE_ROOT__ . 'views/layout.php');
