<?php

class Load{
    public function __construct() {
        
    }
    
    public function view($fileName, $data = false){
        if($data == true){
            extract($data);
        }
        include "DraesApp/Gorunum/" . $fileName . "_draes.php";
    }
    
      public function model($fileName){
        include "DraesApp/Veritabani/" . $fileName . ".php";
        return new $fileName();
    }
  
    public function controllers($fileName,$methodName){
        include "DraesApp/Islemler/" . $fileName . "/$methodName.php";
        return new $fileName();
    }
}
