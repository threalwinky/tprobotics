<?php 

	if ( isset($_POST['username']) and isset($_POST['password'])) {
	 	echo $_POST['username'];
	 	echo "<br>";
	 	echo $_POST['password'];
	 	$host = "localhost";
	 	$username = "username";
	 	$password = "password";
	 	$dbname = "dbname";
	 	$db_conn = mysqli_connect($host, $username, $password, $dbname);
	 	echo db_conn;
	}
	else{
		header("Location: ./signin.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>

</body>
</html>