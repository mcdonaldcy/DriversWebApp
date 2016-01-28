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

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
    <script type="text/javascript" src="Script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-ui-1.11.3/jquery-ui.min.js"> </script>
  <link rel="stylesheet" type="text/css" href= "jquery.alerts.css"/>
    <script type="text/javascript" src="jquery.alerts.js"> </script>
     <link rel="stylesheet" type="text/css" href="jquery-ui-1.11.3/jquery-ui.min.css"/>
    <title></title>
</head>
<body>
<h1> Welcome, <?php echo $username ?>. </h1>

<form action="logout.php">
  <input type="submit" value="Log out">
</form>
    <div id="main">
      <div class="block">
            <div class="centered">
                <div><input type="button" class="button" value="Refuel" onclick="refuel()" /></div>
                <div><input type="button" class="button" value="Carwash" onclick="carwash1()"/></div>
                <div><input type="button" class="button" value="Oil check" onclick="oil_check()"/></div>
                <div><input type="button" class="button" value="Tyres Check" onclick="tyres_check()"/></div>
  </div>

</div>

       </div>

</body>
</html>
