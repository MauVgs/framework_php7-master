<?php

function microtime_float() {
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$stopwatch = array();
$timeStart = microtime_float();
define("CURRENT_PATH", realpath(".") . "/");
define("SYSTEM_PATH", substr(dirname(__FILE__), 0, strrpos(dirname(__FILE__), "/") + 1));

//include SYSTEM_PATH . 'includes/Cache.php';

if(empty($robot))
    include 'config/config.php';
else
	include 'config/config_robot.php';

include 'classes/mysql/shared/ez_sql_core.php';
include 'classes/mysql/ez_sql_mysqli.php';

//start includes opcionales
include 'classes/class.safesql.php';
include 'classes/class.dbForm.php';
include 'classes/class.upload.php';
include 'classes/class.devices.php';
//end includes opcionales

include 'includes/functions.php';
include 'includes/global.php';

if(file_exists(CURRENT_PATH . 'code_behind/' . $page))
	include CURRENT_PATH . 'code_behind/' . $page;