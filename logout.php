<?php #this is a login page where login form displayed to the user 
session_start();
session_destroy();
header('location: ../index.php?status=loggedout');
die();
?>