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
               $username= $_POST["username"];
               
           $admin_model=$this->load->model("Admin_Model");
            $result=$admin_model->userControl($data);
            $query="select * from t_users where  u_username='$username'";
            $result2=$admin_model->mahalleGetir($query); 
            
            $test="";
            
        
            foreach ($result2 as $key => $value) {
                
                if($value["u_yetki"]=="Yonetici"){
                    $test="Yönetici";
                }
                  if($value["u_yetki"]=="Gozlemci"){
                    $test="Gözlemci";
                }
                  if($value["u_yetki"]=="Analizci"){
                    $test="Analizci";
                }
                
                
            }
            
             if($result==false){
             header("Location:". SITE_URL ."/index.php?url=Admin/login");
                 }else if($result=true){

                    Session::init();
                    Session::set("login", true);
                    Session::set("username", $_POST["username"]);
                    Session::set("yetki", $test);
                    header("Location: ". SITE_URL ."/?url=panel/home");
                }else if($result=false){
                    
                  
                    header("Location:". SITE_URL ."/?url=Admin/loginhata");
                     }
            
            

              
                       
                      
               
          

    }
    
    
    public function yeniKullanici(){
        
          
          $sql="select yetki_adi from t_yetki";
       $admin_model=$this->load->model("Admin_Model");
        $result=$admin_model->mahalleGetir($sql);
        
         $data["information"]=array(
            "yetki" =>$result
       
        );
        
        
        $this->load->view("gallery",$data);
    }
    
    public function addUser(){
        
        $admin_model=$this->load->model("Admin_Model");
        
        $u_username=$_POST['username'];
        $u_password=$_POST['password'];
        $u_typeid=$_POST['sel1'];
        
          
        
        
          $data=array(
            "u_username" =>$u_username,
            "u_password"=>$u_password,
            "u_yetki"=>$u_typeid
        );
          
          $resultT= $admin_model->kullaniciKaydet($data);
          
           $mesaj="Kayıt Başarılı Lüften Kullanıcı Adı ve Şifreniz İle Giriş Yapınız";
          $data2["information"]=array(
            "message" =>$mesaj
                
        );
          
          
          if($resultT == 1 ){
            $dataM["mesaj"] = array(
                "mesaj" => "Kayıt işlemi başarıyla gerçekleşti."
            );
                $this->load->view("lastLogin",$data2);
        }else{
            $dataM["mesaj"] = array(
                "mesaj" => "Kayıt işlemi yapılırken bir sorun oluştu."
            ); 
            header("Location: ". SITE_URL ."/?url=Admin/yeniKullanici");
        }
        
       
        
        
   
    }


    public function logout(){
        Session::init();
        Session::destroy();
        header("Location:". SITE_URL ."/?url=Admin/login");
    }
    
    
}
