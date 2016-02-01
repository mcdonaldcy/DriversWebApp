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

if (isset($_POST['carWash'])){
   $currentTime = date('Y/m/d : H:i:s', time());
   $SQL = "INSERT INTO carwash (dateTime, username) VALUES ('$currentTime', '$username')";
   $result = mysqli_query($dbCon, $SQL);
}

if (isset($_POST['oilCheck'])){
   $currentTime = date('Y/m/d : H:i:s', time());
   $SQL = "INSERT INTO oilcheck (dateTime, username) VALUES ('$currentTime', '$username')";
   $result = mysqli_query($dbCon, $SQL);
}

if (isset($_POST['tyresCheck'])){
   $currentTime = date('Y/m/d : H:i:s', time());
   $SQL = "INSERT INTO tyrescheck (dateTime, username) VALUES ('$currentTime', '$username')";
   $result = mysqli_query($dbCon, $SQL);
}

?>

<!DOCTYPE html>

<html xmlns='http://www.w3.org/1999/xhtml'>
<head runat='server'>
    <link rel='stylesheet' type='text/css' href='Stylesheet.css'/>
    <script type='text/javascript' src='Script.js'></script>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <title></title>
</head>
<body>
<div id='container'>
<h1> Welcome, <?php echo $username?></h1>
    <div id='main'>
      <div class='block'>
            <div class='centered'>
            <?php 
            echo
              "<form method='POST' action=''>
               <button type='submit' class='btn btn-default btn-block' onclick='refuel()' name='reFuel'> Refuel </button>"?>
                  <?php
                  $km = $_POST['km'];
                  $qt = $_POST['qt'];
                  $price = $_POST['price'];
                  $currentTime = date('Y/m/d : H:i:s', time());
                if (isset($_POST['reFuel'])){
                  echo "<div id='refuel'>";
                  echo "<p>Enter your KM: " . "<input type='text' name='km' value='' ></p>";
                  echo "<p>Enter the quantity: " . "<input type='text' name='qt' value='' ><p>";
                  echo "<p>Enter the price: " . "<input type='text' name='price' value='' ><p>";
                  echo "<button type='submit' name='submit1' class='btn btn-primary btn-block' onclick='return rusure()' id='sub1'> Submit </button> <br>";
                }
                if (isset($_POST['submit1'])){
                  echo "<h2 style='text-decoration: underline;'>You entered </h2>" . "<h2>KM: " . $km . "<br>" . "Ltrs: " . $qt . "<br> Price: " . "&#8364 " . $price .  "</h2>";
                  echo "</div>";
                  $SQL = "INSERT INTO refuelling (username, km, quantity, price, dateTime) VALUES ('$username', '$km','$qt','$price','$currentTime')";
                  $result = mysqli_query($dbCon, $SQL);
                }
                  ?>

                <div><button type='submit' class='btn btn-default btn-block' onclick='carwash1()' name='carWash'> Carwash </button></div>
                <div><button type='submit' class='btn btn-default btn-block' onclick='oil_check()' name='oilCheck'> Oil Check </button></div>
                <div><button type='submit' class='btn btn-default btn-block' onclick='tyres_check()' name='tyresCheck'> Tyres Check </button></div>
                <br>
                </form>
                <form action='logout.php'>
                  <button type='submit' class='btn btn-default' id='logout'> Logout </button>
                </form>

                </div>
            </div>
      </div>
    </div>
 </div>
</div>
</body>
</html>
