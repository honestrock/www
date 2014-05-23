<?php

class DraesYonetim extends Controller{
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
    
    public function draesAnaliz(){
            
       // $draes_veritabani=$this->load->model("Draes_Veritabani");
    
         
            //$result=$draes_veritabani->userControl($data);
               
           $admin_model=$this->load->model("Admin_Model");

          
           
        $data["information"]=array(
            "bolge" =>$admin_model->bolgeGetir(),
                
        );
  
   

        $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/draesAnaliz",$data);
        $this->load->view("panel/footer");
    }
    
     public function draesAnaliz2(){
            
       // $draes_veritabani=$this->load->model("Draes_Veritabani");
    
         
            //$result=$draes_veritabani->userControl($data);
               
           $admin_model=$this->load->model("Admin_Model");

          
           
        $data["information"]=array(
            "bolge" =>$admin_model->bolgeGetir(),
                
        );
  
   

        $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/draesRiskAnaliz",$data);
        $this->load->view("panel/footer");
    }
    
    
    
    public function draesMahalleGetir(){
    
          $data1 = array(
            "select1" => $_POST["sel1"]

                );
          $bolgeAdi=$_POST['sel1'];
          $test="Demre";
         
          if($bolgeAdi=="Muratpaşa"){
              $bolgeAdi="Muratpasa";
          }
         
          
          $sql="select mahalle_adi from mahalle where bolge_adi='$bolgeAdi'";
       $admin_model=$this->load->model("Admin_Model");
        $result=$admin_model->mahalleGetir($sql);
        
         $data["information"]=array(
            "mahalle" =>$result,
            "bolge"=>$bolgeAdi,
                
        );
         
         $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/draesAnalizMah",$data);
        $this->load->view("panel/footer");
        
        
    }
    
    
     public function draesSokakGetir(){
    
       
          $bolgeAdi=$_POST['sel2'];
          $mahalleAdi=$_POST['sel1'];
       
          
        

          
     $sql="select sokak_adi from sokak where mahalle_adi='$mahalleAdi'";
       $admin_model=$this->load->model("Admin_Model");
        $result=$admin_model->mahalleGetir($sql);
        
         $data["information"]=array(
            "sokak" =>$result,
            "bolge"=>$bolgeAdi,
            "mahalle"=>$mahalleAdi
             
                
        );
         
         $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/draesAnalizSok",$data);
        $this->load->view("panel/footer");
        
        
    }
    
    public function analizGoster(){
        
        $bolgeId=$_POST['sel2'];
        $mahalleId=$_POST['sel3'];
        $sokakId=$_POST['sel1'];
        
        
        
        
        $sqlAnalizBina="SELECT Bina_adi,Pafta,Ada,Parsel,Binanin_tahmini_yasi  FROM bina "
                . "where Bolge='$bolgeId' and Mahalle='$mahalleId'";
        $admin_model=$this->load->model("Admin_Model");
        $result=$admin_model->mahalleGetir($sqlAnalizBina);
        
         $data["information"]=array(
            "sokak" =>$sokakId,
            "bolge"=>$bolgeId,
            "mahalle"=>$mahalleId,
            "sonuc"=>$result        
        );
         
        $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/draesAnalizSonuc",$data);
        $this->load->view("panel/footer");
        
        
    }
     
    
   public function riskGoster(){
            $bolgeAdi=$_POST['sel1'];
          $test="Demre";
         
          if($bolgeAdi=="Muratpaşa"){
              $bolgeAdi="Muratpasa";
          }
         
          
          $sql="select * from bolge where bolge_adi='$bolgeAdi'";
       $admin_model=$this->load->model("Admin_Model");
        $result=$admin_model->mahalleGetir($sql);
        
         $data["information"]=array(
            "sonuc" =>$result
        );
         
         $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/draesRiskSonuc",$data);
        $this->load->view("panel/footer");
   }

    public function logout(){
        Session::init();
        Session::destroy();
        header("Location:". SITE_URL ."/?url=Admin/login");
    }
    
    
}
