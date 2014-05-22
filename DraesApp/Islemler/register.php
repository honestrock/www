<?php

class LoginIslem extends Controller{
    public function __construct() {
         parent::__construct();
        
  
    }
    
    public function anasayfa(){
        $this->load->view("panel/home");
    }
    
    public function yeniKullanici(){
        $this->load->view("registerForm");
    }
    
    public function testIslem(){
        
        
    }
    
   
    
    
    
}

