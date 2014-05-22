<?php

// System dosyalarını otomatik include ediyoruz.
function __autoload($className){
    include_once 'DraesSystem/' . $className . '.php';
}

// Config dosyasını include ediyoruz.
include_once 'DraesApp/DerlemeAyarları/config.php';

// Bootstrap Bölümü
$boot = new Bootstrap();
?>