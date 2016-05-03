<?php

class userModel{
    public $table = 'jmt_user_dealer';
    
    public function getinfo( $username, $pwd) {
        $check_user = $this->getuser($username);
        if($check_user)
        $sql = "select * from '. $this->table.' where username='.$username.'";
        return ;
    }
    
    public function getuser($username) {
       echo $sql = "select * from '.$this->table.' where username='.$username.'";
    }
}
