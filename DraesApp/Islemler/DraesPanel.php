<?php

class DraesPanel extends Controller{
    public function __construct() {
        parent::__construct();
        
   
    }
    
    public function home(){
        $this->load->view("draes");
    }
    public function contact(){
        $this->load->view("contact");
    }
    public function gallery(){
        $this->load->view("gallery");
    }
    public function news(){
        $this->load->view("news");
    }
    public function services(){
        $this->load->view("services");
    }
    
    public function addNewContent(){
    
        $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/addNewContent");
        $this->load->view("panel/footer");
        
    }
    
    
    
    
}