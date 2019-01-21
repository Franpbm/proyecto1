<?php
    require_once('../database/insert.php');
    require_once('../database/select.php');
    
    $name = $_POST['name'] ?? '';
    $msg = $_POST['msg'] ?? '';
    $date = $_POST['date'] ?? '';

    insert($name, $msg, $date);
    showData();
?>