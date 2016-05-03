<?php
header("Content-type: text/html; charset=utf-8"); 
session_start();

define('ROOT_PATH',  dirname(__FILE__).DIRECTORY_SEPARATOR);
define('CACHE_PATH', ROOT_PATH.'_cache');
define('CONFIG_PATH', ROOT_PATH.'config'.DIRECTORY_SEPARATOR);
require_once 'config/config.php';
require_once 'config/include.php';
//require_once 'config/session.class.php';
PC::run($config);
