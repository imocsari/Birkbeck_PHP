<?php 
session_start();
session_unset();
header('location: index.php?status=loggedout');
die();
 ?>

 
 <!-- if ($_SESSION['username']->logout()) {
 echo '<div style="padding-top:200px; padding-bottom:800px; font-weight: bold; color: white; text-align:center; font-size:30px"><p>Succesfully logged out!</br>You will be now redirected to homepage! :)</p></div>';
 header( "refresh:3;url=index.php" );
 die();
 sleep(5);
 } -->