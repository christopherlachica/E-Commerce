<?php
	$cookie_name = 'loggedin';
    $dbCon = mysqli_connect("localhost", "root", "bryzki", "dbtest");

    if(!$dbCon){
		die("Database connection failed: ".mysqli_connect_error());
	}
?>