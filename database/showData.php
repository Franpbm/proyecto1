<?php

function showData(){
    //print_r($_SESSION);
    $dbusername = "root";
    $dbpassword = "root";
    $dbservername = "localhost";
    $dbname = "info";

    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword);
    //$conn = new mysqli($dbservername, $dbusername);
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

    $conn->set_charset("utf8");
    $sql = "SELECT user.username, msg, timestamp FROM message INNER JOIN user ON message.userId = user.id ORDER BY timestamp DESC";
    $result = $conn->query($sql);
    $final = array();

    if ($result->num_rows > 0) {
        $i = 0;
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $final[$i] = array($row["username"], $row["msg"], $row["timestamp"]);
            $i++;
        }
    } else {
        //echo "No results";
    }
    echo json_encode((array)$final);

    $conn->close();

}

?> 