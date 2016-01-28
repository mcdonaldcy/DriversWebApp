<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
  include_once('connection.php');

if (isset($_SESSION['id'])){
  $userId = $_SESSION['id'];
  $username = $_SESSION['username'];
} else{
  header('Location: index.php');
  die();
}

if (isset($_POST['carwash'])){
  $currentTime = date('d-m-Y G:i:s');
  echo $currentTime;
}

if (isset($_POST['carWash'])){
   $currentTime = date('Y/m/d : H:i:s', time());
   $SQL = "INSERT INTO carwash (dateTime, username) VALUES ('$currentTime', '$username')";
   $result = mysqli_query($dbCon, $SQL);
}

?>

<!DOCTYPE html>

<html xmlns='http://www.w3.org/1999/xhtml'>
<head runat='server'>
    <link rel='stylesheet' type='text/css' href='Stylesheet.css'/>
    <script type='text/javascript' src='Script.js'></script>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
    <title></title>
</head>
<body>
<div id='container'>
<h1> Welcome, <?php echo $username ?>. </h1>
    <div id='main'>
      <div class='block'>
            <div class='centered'>
            <?php echo
              "<form method='POST' action=''>
                <div><button type='submit' class='btn btn-default btn-block' onclick='refuel()' name='reFuel'> Refuel </button></div>
                <div><button type='submit' class='btn btn-default btn-block' onclick='carwash()' name='carWash'> Carwash </button></div>
                <div><button type='submit' class='btn btn-default btn-block' onclick='oil_check()' name='oilCheck'> Oil Check </button></div>
                <div><button type='submit' class='btn btn-default btn-block' onclick='tyres_check()' name='tyresCheck'> Tyres Check </button></div>
                <br>
                </form>" ?>
                <form action='logout.php'>
                  <button type='submit' class='btn btn-default' id='logout'> Logout </button>
                </form>
            </div>
      </div>
    </div>
</div>
</body>
</html>
