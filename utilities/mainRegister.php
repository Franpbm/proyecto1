<?php

    

    require_once('../database/registerUser.php');
    
    session_start();
    
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $username = $_POST['username'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';

    registerUser($name, $surname, $username, $birthdate, $password, $email);

?>