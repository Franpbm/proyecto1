<?php

    session_start();

    require_once('../database/loginUser.php');
    require_once('../database/showData.php');
    
    $username = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    //compararlos a ver si existe
    if(check($username, $pass)){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $pass;
        showData();
    } else {
        //echo "Datos erroneos";
    }


?>