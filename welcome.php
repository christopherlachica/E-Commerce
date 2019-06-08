<?php
session_start();
if(isset($_POST['submit']){
	require 'connection.php';
	$username = $_POST['username'];
	$password = $_POST['pass'];
	$result = mysqli_query($dbCon, 'select * from users where username="'.$username.'" and password="'.$password.'"');
	if(mysqli_num_rows()==1){
		$_SESSION['username'] = $username;
		header('Location: indexx.php');
	}
	else
		echo 'Account is invalid';
	
}


echo 'Welcome '.$_SESSION['username'];
?>