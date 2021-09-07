<?php
    session_start();
	if(!isset($_SESSION["user"])){
		header("Location: Login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="styles/Dashboard.css">
</head>
<body>

<div class="header">
  <img src="Resources/logo.png" alt="Logo here" width="200" height="50">
  <div class="header-right">
    <a class="active" href="Home.php">Home</a>
    <a href="Update_Teacher_Information.php">Update</a>
    <a href="Contact_Us.php">Contact</a>
    <a href="Profile.php">Profile</a>
    <a href="Logout.php">Logout</a>
  </div>
</div>

<div style="padding-left:20px">
  <h1 style = "color : #48C9B0 ;"><center> Welcome To Teacher's Profile</center></h1>
    </div>
   
    
</body>
</html>