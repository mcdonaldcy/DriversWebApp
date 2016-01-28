<?php 
session_start();

if (isset($_SESSION['id'])){
	$userId = $_SESSION['id'];
	$username = $_SESSION['username'];
} else{
	header('Location: index.php');
	die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1> Welcome, <?php echo $username ?>. </h1>

<form action="logout.php">
	<input type="submit" value="Log out">
</form>
</body>
</html>