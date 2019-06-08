<!--man header-->
<?php include $_SERVER["DOCUMENT_ROOT"] . '/php/head.php';?>
<?php include $_SERVER["DOCUMENT_ROOT"] . '/php/menu.php';?>

<!--page info-->

<?php include $_SERVER["DOCUMENT_ROOT"] . '/php/registration.php';?>
<?php
   if (isset($_POST['submitButton'])) {
        include("connection.php"); //connection.php
        $username = strip_tags($_POST['username']);
        $password =  md5($_POST['pass']);
       //should do validation on passwords before submitting form
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($dbCon, $sql)) {
		include("logrep.php");
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbCon);
    }

       mysqli_close($dbCon);
   }
?>
	
<!--body-->
