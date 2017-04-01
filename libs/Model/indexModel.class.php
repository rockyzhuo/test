<?php

class indexModel{
    public $table='t_user';
    
    public function get_info($username){
       $sql = 'select * from '.$this->table.' where userid="'.$username.'"';
        return DB::findAll($sql);
    }
    
    public function infos(){
        $sql = 'select * from ' . $this->table;
        return DB::findAll($sql);
    }
    
    
}
