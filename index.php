<?php
/**
 * Sephirot Template Entry
 * WebEngine 1.2.x compatible
 */
if(!defined('access')) die();

if(!defined('__PATH_TEMPLATE_ROOT__')){
  define('__PATH_TEMPLATE_ROOT__', __DIR__ . '/');
}

if(file_exists(__PATH_TEMPLATE_ROOT__ . 'inc/template.functions.php')){
  include(__PATH_TEMPLATE_ROOT__ . 'inc/template.functions.php');
}

include(__PATH_TEMPLATE_ROOT__ . 'views/layout.php');
