<?php
require_once('../utilities/user.php');


// comprarar
function check($username, $password) {
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "info";

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


$sql = "SELECT username FROM `user` WHERE username = $username AND password = password($password)";

$result = $conn->query($sql);
$final = array();

if ($result->num_rows > 0) {
    echo true;
// output data of each row
} else {
//echo "No results";
    echo false;
}


$conn->close();
}

?>