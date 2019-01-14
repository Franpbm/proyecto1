<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body class="homebody">

    <?php
            require_once ('util/db_manager.php');

            if (isset($_POST['submit'])){
                $user = $_POST['user'];
                $message = $_POST['message'];
                $date = date("Y-m-d");
                
                echo '<h1>Comentario realizado</h1>';
                $sql = "INSERT INTO information (user, `message`, `date`)
                VALUES ($user, $message, $date)";
    
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
    
    
            }

            /*elseif (isset($_POST['bien'])){
                echo '<h1>Te parece bien</h1>';
                $sql = "INSERT INTO voto (tipo)
                VALUES ('bien')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
    
            }

            elseif (isset($_POST['regular'])){
                echo '<h1>Te parece regular</h1>';
                $sql = "INSERT INTO voto (tipo)
                VALUES ('regular')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
    
            }

            elseif (isset($_POST['mal'])){
                echo '<h1>Te parece mal</h1>';
                $sql = "INSERT INTO voto (tipo)
                VALUES ('mal')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
    
            }

            elseif (isset($_POST['muyMal'])){
                echo '<h1>Te parece muy mal</h1>';
                $sql = "INSERT INTO voto (tipo)
                VALUES ('muyMal')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
    
            }*/

            
    ?> 
        
    <button type="button" onclick="location='index.php'">Vuelve atrás</button>
    </body>
</html>