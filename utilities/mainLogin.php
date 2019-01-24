<?php

    session_start();

    require_once('../database/loginUser.php');
    require_once('../database/showData.php');
    
    //$name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    //$pass = $_POST['pass'] ?? '';
    $pass = $_POST['pass'] ?? '';
    //echo $username;
    //echo $pass;

    //compararlos a ver si existe
    if(check($username, $pass)){
        // $_SESSION['username'] = "Juan";
        $_SESSION['username'] = $_POST['name'] ?? '';
        // $_SESSION['pass'] = "raton";
        $_SESSION['pass'] = $_POST['pass'] ?? '';
        showData();
    } else {
        echo "Datos erroneos";
    }


?>