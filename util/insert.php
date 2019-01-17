<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>

    <?php
            require_once('db_manager.php');
            require_once('debug.php');
            
            if (isset($_POST['submit'])){
                $user = $_POST['user'];
                $message = $_POST['message'];
                $date = date("Y-m-d");
                insertUserObject($user, $message, $date);
            }

            $info = getMsgs();
            if ($info != null){
                foreach ($info as $register){
                    echo '<p><b>ID:</b> '.$register['id'].'</p>';
                    echo '<p><b>NAME:</b> '.$register['user'].'</p>';
                    echo '<p><b>MESSAGE:</b> '.$register['message'].'</p>';
                    echo '<p><b>DATE:</b> '.$register['date'].'</p>';
                    echo '<br>';

                }
            }
            else{
                echo '<p>NO MESSAGES TO SHOW</p>';

            }     
    ?> 

<div class="container">
  <form method="POST" action="#">
    <div class="form-group">
      <label for="genial">
            <label>USER NAME: </label>
            <input type="text" name="user">
            <br>
            <br>
            <label>USER MSG: </label>
            <input type="text" name="message">
            <br>

            <button type="submit" name="submit">Probar</button>
      </label>
    </div>
 </form>

    </body>
</html>