<?php
 class testController{
     public function test(){
         $testModel = M('test');
         $data = $testModel->test();
         $v = V('test');
         $v->display($data);
     }
 }
