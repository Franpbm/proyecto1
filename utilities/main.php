<?php

    session_start();

    $dbusername = "root";
    $dbpassword = "root";
    $dbservername = "localhost";
    $dbname = "info";

    require_once('../database/loginUser.php');
    require_once('../database/registerUser.php');
    require_once('../database/postMessage.php');
    require_once('../database/showData.php');
    require_once('./validator.php');

    if(isset($_POST['action']) && $_POST['action'] == 'register'){
        $name = $_POST['name'] ?? '';
        $surname = $_POST['surname'] ?? '';
        $username = $_POST['username'] ?? '';
        $birthdate = $_POST['birthdate'] ?? '';
        $password = $_POST['password'] ?? '';
        $email = $_POST['email'] ?? '';
        registerUser($name, $surname, $username, $birthdate, $password, $email);
    }

    if(isset($_POST['action']) && $_POST['action'] == 'login'){  
        $username = $_POST['username'] ?? '';
        $pass = $_POST['password'] ?? '';

        //compararlos a ver si existe
        if(check($username, $pass)){
            $_SESSION['username'] = $username;
            //showData();
        } else {
            //echo "Datos erroneos";
        }
    }

    if(isset($_POST['action']) && $_POST['action'] == 'post'){
        $msg = $_POST['msg'] ?? '';
        $date = $_POST['date'] ?? '';
        post($msg, $date);
        showData();
    }

    if(isset($_POST['action']) && $_POST['action'] == 'show'){
        showData();
    }

    if(isset($_POST['action']) && $_POST['action'] == 'logout'){
        //echo print_r($_SESSION);
        unset($_SESSION['username']);
        //echo print_r($_SESSION);
        session_destroy();
        //echo print_r($_SESSION);
    }

?>