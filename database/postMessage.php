<?php

function post($msg, $date){
    //print_r($_SESSION);
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "info";
    
    // Create connection
    //$conn = new mysqli($servername, $username, $password);
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

    $aux = $_SESSION['username'];
    
    // Get user ID
    $sql = "SELECT id FROM user WHERE username = '$aux'";
    //echo $sql;

    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        //echo "5Error: " . $sql . "<br>" . $conn->error;
    }
    $userId = 0;
 

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userId = $row["id"];
        //echo $userId;
    } else {
        //echo "No results";
    }

    // Insert message
    $sql = "INSERT INTO message (userId, msg, timestamp) VALUES ($userId, '$msg', '$date')";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        //echo "5Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?> 