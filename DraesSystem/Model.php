<?php

class Model{
    
    protected $db = array();
    
    public function __construct() {
        $dsn = 'mysql:dbname=turkuazp_draes;host=ultio.alastyr.com';
        $user = 'turkuazp_draes';
        $password = 'draes+system';
        
        $this->db = new Database($dsn, $user, $password);
    }
}
