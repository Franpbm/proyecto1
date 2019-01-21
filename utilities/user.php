<?php
    require_once('../database/insertUser.php');
    
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $username = $_POST['username'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $password = $_POST['password'] ?? '';
    $passwordVerificate = $_POST['passwordVerificate'] ?? '';
    $email = $_POST['email'] ?? '';

    
    insertUser($name, $surname, $username, $birthdate, $password, $passwordVerificate, $email);
?>