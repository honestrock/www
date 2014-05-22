<?php

class Admin_Model extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function userControl($array=array()){
        $sql="Select * from t_users where u_username= :kadi and u_password= :parola";
        $count=$this->db->affectedRows($sql,$array);
        if($count>0){
            $sql="Select * from t_users where u_username= :kadi and u_password= :parola";
            return $this->db->select($sql,$array);
        }else{
            return false;
        }
    }
    
    public function kullaniciKaydet($data){
        return $this->db->insert("t_users", $data);
    }
 
}