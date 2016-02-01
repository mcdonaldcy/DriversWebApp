<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script type='text/javascript' src='Script.js'></script>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'/>
    <link rel='stylesheet' type='text/css' href='styles2.css'/>
</head>
<body>
<h1> Welcome to McDrivers, please log in to continue. </h1>

<form method="POST" action=".">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"><br>
    <button type="submit" name="submit" class="btn btn-default">Submit</button> <br><br>
    <?php
    session_start();

if (isset($_POST['submit'])){
  include_once("connection.php");
  $username = $_POST['username'];
  $password = $_POST['password'];

  $SQL = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $query = mysqli_query($dbCon, $SQL);

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
  else if ((empty($username)) || (empty($password))){
    echo "<h4> Please fill in the fields. </h4";
  }
   else{
    echo "<h4> Invalid username or password. </h4>";
  }
}
    ?>
  </div>
</form>
</form>
<!--
<div class="form-group">
	<input type="text" placeholder="username" class="form-control" name="username" /> <br> 
	</div>
	<div class="form-group">
	<input type="password" placeholder="password" class="form-control" name="password"/> <br>
	</div>
	<div class="form-group">
	<input type="submit" name="submit" value="login" />
	</div>
	<!-- <p> error_reporting(E_ALL & ~E_NOTICE); </p>

	
<form class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Username">
    </div>
  </div> 
  <br><br><br>
  <div class="form-group">
    <div class="col-sm-2">
      <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
          <input type="checkbox"> Remember me
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>


	 -->


</body>
</html>