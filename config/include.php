<?php
include_once CONFIG_PATH.'include.list.php';

foreach ( $paths as $path){
    include_once ROOT_PATH.$path;
}

class PC{
    
    public static $controller;
    public static $method;
    private static $config;
    
    private static function init_db(){
        DB::init('mysql', self::$config['dbconfig']);
    }
    
    private static function init_view(){
        Controller::init('Smarty', self::$config['viewconfig']);      
    }
    
    private static function init_controller(){
        self::$controller = isset($_GET['c']) ? addslashes($_GET['c']):'index';
    }
    
    private static function init_method(){
        self::$method = isset($_GET['m']) ? addslashes($_GET['m']):'index';
    }
    
    public static function run($config){
        self::$config = $config;
        self::init_db();
        self::init_view();
        self::init_controller();
        self::init_method();
        C(self::$controller,self::$method);
    }
}