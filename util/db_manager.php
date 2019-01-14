<?php
    /* Basic template for ICSE Intranet project php files */
    /**
     * Created by PhpStorm.
     * User: Silverio
     * Date: 25/01/2017
     * Time: 9:01
     */
    require_once ('debug.php');
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = 'info';

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        $msg = "Connection failed: " . $conn->connect_error;
        show_alert($msg, 'danger');
    }
?>