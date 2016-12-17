<?php
session_start();
// Do Something
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<p>sjfajsldf</p>
</body>
</html>
