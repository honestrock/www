<?php

class Model{
    
    protected $db = array();
    
    public function __construct() {
        $dsn = 'mysql:dbname=Draes;host=localhost';
        $user = 'root';
        $password = 'kamp';
        
        $this->db = new Database($dsn, $user, $password);
    }
}
