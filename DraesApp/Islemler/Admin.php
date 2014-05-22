<?php

class Admin extends Controller{
    public function __construct() {
        parent::__construct();
        
    }
    
  
    
     public function login(){
         
        // Oturum Kontrolü
       Session::init();
       if(Session::get("login") == true){
           header("Location: ". SITE_URL ."/?url=Index/anasayfa");
        }
        $this->load->view("services");
        
    }
     public function loginhata(){
         
        // Oturum Kontrolü
         
           Session::init();
           Session::set("loginHata", true);
           Session::set("kullanici","Kullanıcı adı hatalı");
           Session::set("parola","Kullanıcı adı hatalı");
           header("Location: ". SITE_URL ."/?url=LoginIslem/yeniKullanici");
         
    
       
        
    }
    
    public function runLogin(){
            
       // $draes_veritabani=$this->load->model("Draes_Veritabani");
    
         
               $data = array(
            ":kadi" => $_POST["username"],
            ":parola" => $_POST["password"]
              
                );
        
            //$result=$draes_veritabani->userControl($data);
               
           $admin_model=$this->load->model("Admin_Model");
            $result=$admin_model->userControl($data);
               
            
             if($result==false){
             header("Location:". SITE_URL ."/index.php?url=Admin/login");
                 }else if($result=true){
                    
                    Session::init();
                    Session::set("login", true);
                    Session::set("username", $_POST["username"]);
                    header("Location: ". SITE_URL ."/?url=panel/home");
                }else if($result=false){
                    
                  
                    header("Location:". SITE_URL ."/?url=Admin/loginhata");
                     }
            
            

              
                       
                      
               
          

    }
    
    
    public function yeniKullanici(){
        $this->load->view("registerForm");
    }
    
    public function addUser(){
        
        $admin_model=$this->load->model("Admin_Model");
        
        $u_username=$_POST['username'];
        $u_password=$_POST['password'];
        $u_typeid=$_POST['usertype'];
        
          
        
        
          $data=array(
            "u_username" =>$u_username,
            "u_password"=>$u_password,
            "u_typeid"=>$u_typeid
        );
          
          $resultT= $admin_model->kullaniciKaydet($data);
          
          if($resultT == 1 ){
            $dataM["mesaj"] = array(
                "mesaj" => "Kayıt işlemi başarıyla gerçekleşti."
            );
        }else{
            $dataM["mesaj"] = array(
                "mesaj" => "Kayıt işlemi yapılırken bir sorun oluştu."
            ); 
        }
          $this->load->view("gallery",$dataM);
    }


    public function logout(){
        Session::init();
        Session::destroy();
        header("Location:". SITE_URL ."/?url=Admin/login");
    }
    
    
}
