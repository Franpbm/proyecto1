<?php

function showData(){
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

$conn->set_charset("utf8");

$sql = "SELECT name, msg, datetime FROM test ORDER BY datetime DESC";
$result = $conn->query($sql);
$final = array();

if ($result->num_rows > 0) {
    $i = 0;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $final[$i] = array($row["name"], $row["msg"], $row["datetime"]);
        //$final[$i][0] = $row["name"];
        //$final[$i][1] = $row["msg"];
        //$final[$i][2] = $row["datetime"];
        $i++;
    }
} else {
    //echo "No results";
}
echo json_encode((array)$final);

$conn->close();

}

?> 