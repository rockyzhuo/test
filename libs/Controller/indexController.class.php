<?php
 class indexController extends common{ 
     
     public function index(){                
         $indexModel = M('index');
         $data = $indexModel->get_info('1527');                      
         Controller::assign(array('data'=>$data));                  
         Controller::display('/index/index.html');
     }
     
     public function login(){ 
         
         if($_POST['dosubmit']){
             
             $email = addslashes($_POST['email']);
             $pwd = addslashes($_POST['password']);
             $user_model = M('user');
             $user_model->getinfo($email,$pwd);
             dump($_POST);
         } else {
             
             Controller::display('index/login.html');
         }
                
     }
 }
