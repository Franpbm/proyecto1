<?php

function check($user, $pass) {

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

    $conn->set_charset("utf8");

    $sql = "SELECT username FROM info.`user` WHERE username = '$user' AND password = password('$pass')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true;
        // output data of each row
    } else {
        //echo "No results";
        return false;
    }

    $conn->close();
}

?>