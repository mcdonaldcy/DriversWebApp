<?php
session_start();

if (isset($_POST['submit'])){
	include_once("connection.php");
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$query = mysqli_query($dbCon, $sql);

	if($query) {
		$row = mysqli_fetch_row($query);
		$userId = $row[0];
		$dbUsername = $row[1];
		$dbPassword = $row[2];
	}

	if($username == $dbUsername && $password == $dbPassword){
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		header('Location: index2.php');
	}
	 else{
		echo "Incorrect username or password";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> LOGIN </h1>
<form method="POST" action=".">
	<input type="text" placeholder="username" name="username" /> <br>
	<input type="password" placeholder="password" name="password"/> <br>
	<input type="submit" name="submit" value="login" />
	<!-- <p> error_reporting(E_ALL & ~E_NOTICE); </p> -->
</form>
</body>
</html>