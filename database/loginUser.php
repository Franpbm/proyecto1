<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
require_once('../utilities/user.php');
$_SESSION["username"] = ".$username.";
$_SESSION["password"] = ".$password.";
?>

</body>
</html>
