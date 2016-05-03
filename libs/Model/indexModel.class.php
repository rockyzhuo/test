<?php

class indexModel{
    public $table='im_article';
    
    public function get_info($username){
       $sql = 'select * from '.$this->table.' where userid="'.$username.'"';
        return DB::findAll($sql);
    }
    
}
