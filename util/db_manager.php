<?php
    require_once ('debug.php');
    require_once ('insert.php');
    function insertUserObject ($user, $message, $date){
        try{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = 'proyecto1';
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO information (user, `message`, `date`)VALUES ('$user', '$message', '$date');";
        $conn->exec($sql);
        return true;
        }catch(PDOException $e)
        {
        echo $sql . "
        " . $e->getMessage();
        return false;
        }
        $conn = null;
        }

    function selectUserObject ($user, $message, $date){
            try{
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = 'proyecto1';
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM information";
            $result = $conn->query($sql);
            $conn->exec($sql);
            echo $result;
            return true;
            }catch(PDOException $e)
            {
            echo $sql . "
            " . $e->getMessage();
            return false;
            }
            $conn = null;
            }

    
        
        
?>