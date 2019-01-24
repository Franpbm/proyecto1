<?php
    
    session_start();
    
    require_once('../database/postMessage.php');
    require_once('../database/showData.php');
    
    //$name = $_POST['name'] ?? '';
    $msg = $_POST['msg'] ?? '';
    $date = $_POST['date'] ?? '';

    post($msg, $date);
    showData();

?>