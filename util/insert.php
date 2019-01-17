<!DOCTYPE html>
<html lang="en">
    <head>asdfsdf
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
                selectUserObject($user, $message, $date);
            }
            
    ?> 

<div class="container">
  <form method="POST" action="#">
    <div class="form-group">
      <label for="genial">
            <input type="text" name="user">
            <input type="text" name="message">
            <button type="submit" name="submit">Probar</button>
      </label>
    </div>
 </form>

    </body>
</html>