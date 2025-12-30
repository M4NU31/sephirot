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

$serverInfoCache = LoadCacheData('server_info.cache');
if(is_array($serverInfoCache)) {
	$srvInfo = explode("|", $serverInfoCache[1][0]);
}

$maxOnline = config('maximum_online', true);
$onlinePlayers = check_value($srvInfo[3]) ? $srvInfo[3] : 0;
$onlinePlayersPercent = check_value($maxOnline) ? $onlinePlayers*100/$maxOnline : 0;
$css_version = '1.1.13';

include(__PATH_TEMPLATE_ROOT__ . 'views/layout.php');
