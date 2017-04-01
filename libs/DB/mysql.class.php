<?php

class mysql{
    
    var $link;
    
    public function err(){
        die('对不起，你的操作有误，请检查后再操作！');
    }
    
    public function query($sql) {
        if(!($query = mysql_query($sql))){
            $this->err($sql."<br/>".  mysql_errno());
        }else{
            return $query;
        }
    }
    
    public function connect( $config, $pconnect = false ){
        extract($config);//数值变成 变更附值 array('a'=>1,'b'=>2);  a=1,b=2;
        
        /**
         * mysql_pconnetc 长连接
         * mysql_connect 短连接
         */
        $this->link = $pconnect ? @mysql_pconnect( $host, $user, $pwd) : @mysql_connect( $host, $user, $pwd);
        if(!$this->link){
            $this->err();
        }       
        //连接数据库
        if(!mysql_select_db( $database, $this->link )){ 
            $this->err();
        }        
        mysql_query('set names '.$charset);
    }
    
    public function update( $table, $arr, $where){
            //update table set('abc'='1',)    
        foreach( $arr as $k => $v){
            $v = mysql_real_escape_string($v);
            
            $arr_val[] = "`".$k.'`=`'.$v."`";
        }
        $val = implode(',', $arr_val);
        $sql = "update '.$table.' set ('.$val.') where '.$where.'";
        $this->query($sql);
    }
    
    public function insert( $table, $arr ){
        $arr_key = array_keys($arr);
        $arr_val = array_values($arr);
        $key = implode(',', $arr_key);
        $val = implode(',', $arr_val);
        $sql = "insert into '.$talbe.' ('.$key.') value('.$val.')";
        $this->query($sql);
        return mysql_insert_id();
    }
           
    public function del( $table, $where){
        $sql = "delete from ".$table." where ".$where;
        $this->query($sql);
    }
    
     public function findOne($query) {    
        $res = mysql_fetch_array( $query, MYSQL_ASSOC);
        return $res;
    }
    
    public function findAll($query){
        while($res = mysql_fetch_array($query,MYSQL_ASSOC)){
            $ls[] = $res;
        }
        return isset($ls) ? $ls : '';
    }
    
    public function findResult( $query, $row=0, $field=0 ){
        $res = mysql_result( $query, $row, $field );
        return $res;
    }
    
}

