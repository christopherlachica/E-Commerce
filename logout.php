<?php
    session_start();
    session_destroy();
	setcookie("loggedin", "val", time() - (120), "/");
	header("Location: /php/indexx.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>You are logged out!</title>
    </head>
    <body>
        You are logged out.<br />
		
        <a href="/php/indexx.php">Login</a>
    </body>
</html>