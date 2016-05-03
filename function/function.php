<?php

     function C($name,$method) {  
        require_once '/libs/Controller/'.$name.'Controller.class.php';
        $controller = $name.'Controller';
        $obj = new $controller(); 
        $obj->$method();             
    }
    
    function M($name){
        require_once '/libs/Model/'.$name.'Model.class.php';
        $model = $name.'Model';
        return $obj = new $model();
    }
    
    function V($name){
        require_once '/libs/View/'.$name.'View.class.php';
        $view = $name.'View';
        return $obj = new $view();  
    }
    
    function ORG(){
        require_once '/libs/View/smarty/Smarty.class.php';
    }
    
    function dump($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
    
    function url_jump( $msg, $url, $type){
        if($type ==1){
            echo "<script>";
            if($msg){
                echo "alert('.$msg.')";
            }
            if($url){
                echo "window.location.href='.$url.'";
            }
            echo "</script>";
            exit;
        }
        else{
            header('Location:'.$url);
        }
    }

    
    ?>
