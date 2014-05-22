<?php

class LoginIslem extends Controller{
    
    public function __construct() {
         parent::__construct();
        
           Session::init();
        if(Session::get("loginHata") == true){
            Session::destroy();
           header("Location: ". SITE_URL ."/?url=LoginIslem/yeniKullanici");
        
        }else{
             header("Location: ". SITE_URL ."/?url=panel/home");
        }
        
     
                
     
  
    }
    
    public function anasayfa(){
        $this->load->view("panel/home");
    }
    
    public function yeniKullanici(){
        $this->load->view("loginForm");
    }
    
    public function testIslem(){
        
        
    }
    
   
    
    
    
}

