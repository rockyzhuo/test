<?php
class Controller{

    public static $view;
    
    public static function init( $viewtype, $config){      
        self::$view = new $viewtype;
        foreach ( $config as $key => $val){
            self::$view -> $key = $val;
        }       

        self::$view->compile_dir = CACHE_PATH;
    }
    
    public static function assign($data){
        foreach($data as $key => $val){
            self::$view->assign($key,$val);
        }        
    }
    
    public static function display( $template ){        
        self::$view->display($template);
    }
}

//class controller{
//    
//    private $tpl;    
//    protected $now_url;
//
//    public function __construct() {
//
//    }
//    
//    public function init($viewtype, $config){
//        $this->tpl = new $viewtype;
//        foreach ( $config as $key => $val ){
//            $this->tpl -> $key = $val;
//        }        
//    }
//
//    protected function assign($param) {
//        foreach ($data as $key => $val){
//            $this->tpl -> assign($key,$val);
//        }
//    }
//    
//    protected function display( $temp ) {
//        $this->tpl -> display( $temp );
//    }
//}