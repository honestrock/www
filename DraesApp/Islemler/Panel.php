<?php
class Panel extends Controller{
    public function __construct() {
        parent::__construct();
        
         Session::init();
        if(Session::get("login") == false){
            Session::destroy();
            header("Location: ". SITE_URL ."/?url=admin/login");
        }
     
    }
    
    public function home(){
        $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/home");
        $this->load->view("panel/footer");
    }
    
    public function addNewContent(){
    
        $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/addNewContent");
        $this->load->view("panel/footer");
        
    }
    
    
    
    
}