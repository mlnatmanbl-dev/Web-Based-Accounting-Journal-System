<?php

define("DS", DIRECTORY_SEPARATOR);

define("BASE_PATH", __DIR__ .DS."..".DS);
define("APP_PATH", BASE_PATH ."app/".DS);
define("SYS_PATH", BASE_PATH ."system/".DS);
define("APP_CONFIG", APP_PATH ."configs/".DS);
define("VIEW_PATH", APP_PATH ."views/".DS);

//echo BASE_PATH;


require_once(BASE_PATH.'cnf.php');
//echo BASE_PATH.'cnf.php';

define("ROOT_DIR", $root_dir );
define("SITE_URL", $site_url. ROOT_DIR);
define("BASE_URL", $site_url);

require_once(SYS_PATH.'Routing.php');
require_once(SYS_PATH.'General.php');
require_once(SYS_PATH.'Session.php');
require_once(SYS_PATH.'Database.php');

require_once(APP_PATH.'helpers/string_helper.php');
require_once(BASE_PATH.'route.php');                      
