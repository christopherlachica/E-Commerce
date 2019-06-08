<?php 
include("connection.php");
if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pass = md5($_POST['pass']);
	
	
	$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass';";
	
	$result = mysqli_query($dbCon, $sql);
	$count = mysqli_num_rows($result);
	
	if($count == 1){
		$cookie_value = $user;
		setcookie($cookie_name, $cookie_value, time() + (12000), "/");
		header("Location: /php/loginsuccess.php");
	}
	else{
		$error = "Username or password is invalid!";
		include("signup.php");
	}
}
?>