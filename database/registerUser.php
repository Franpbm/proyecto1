<?php

function insertUser($name, $surname, $username, $birthdate, $password, $passwordVerificate, $email){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "prueba";
    
    // Create connection
    $conn = new mysqli($servername, $username);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // select database
    $sql = "USE $dbname";
    if ($conn->query($sql) === TRUE) {
        //echo "Database entered";
    } else {
        //echo "Error accessing database: " . $conn->error;
    }
    
    $sql = "INSERT INTO user (name, surnames, username, birthdate, password, passwordVerificate, email) VALUES ('" . $name . "', '" . $surname . "', '" . $username . "', '" . $birthdate . "', '" . $password . "', '" . $passwordVerificator . "', '" . $email . "')";
    
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        //echo "5Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?> 