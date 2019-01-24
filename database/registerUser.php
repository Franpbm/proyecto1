<?php

function registerUser($name, $surname, $username, $birthdate, $password, $email){
   
    $dbusername = "root";
    $dbpassword = "root";
    $dbservername = "localhost";
    $dbname = "info";

    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "USE $dbname";
    if ($conn->query($sql) === TRUE) {
        //echo "Database entered";
    } else {
        //echo "Error accessing database: " . $conn->error;
    }

    $sql = "INSERT INTO user (name, surnames, username, birthdate, password, passwordVerificate, email) VALUES ('" . $name . "', '" . $surname . "', '" . $username . "', '" . $birthdate . "', '" . $password . "', '" . $email . "')";

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        //echo "5Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?> 