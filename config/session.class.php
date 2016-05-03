<?php

class session{
    
    public function __construct(){
        $this->session_set();
    }
    
    private function session_set() {
	    ini_set('session.save_handler', 'user');
		$this->maxlifetime = get_cfg_var("session.gc_maxlifetime");
		
		session_set_save_handler(
//            array($this, 'session_open'),
//            array($this, 'session_close'),
//            array($this, 'session_read'),
//            array($this, 'session_write'),
//            array($this, 'sess_destroy'),
//            array($this, 'session_gc')
        );	
		//register_shutdown_function('session_write_close');
		session_start();
	}
    
    public function session_open($save_path, $session_name) {
		
		return true;	
	}
    
}

