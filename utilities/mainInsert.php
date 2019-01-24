<?php
session_start();
    require_once('../database/insertData.php');
    require_once('../database/showData.php');
    
    $name = $_POST['name'] ?? '';
    $msg = $_POST['msg'] ?? '';
    $date = $_POST['date'] ?? '';

    insert($name, $msg, $date);
    showData();
?>