<?php

class Draes_Veritabani extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function userControl($array=array()){
        $sql="Select * from Users where k_adi= :kadi and k_parola= :parola";
        $count=$this->db->affectedRows($sql,$array);
        if($count>0){
            $sql="Select * from Users where k_adi= :kadi and k_parola= :parola";
            return $this->db->select($sql,$array);
        }else{
            return false;
        }
    }
    
    public function kullaniciKaydet($data){
        return $this->db->insert("Users", $data);
    }
 
}