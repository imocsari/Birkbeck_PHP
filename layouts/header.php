<?php 
if(isset($_SESSION['username'])){
echo '<a class="link" href="login.php?action=logout" style="text-decoration:none">logout</a>';
}else{
echo '<a class="link" href="login.php" style="text-decoration:none">login</a>';
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <title></title>
  </head>
  <body>

<div class="navbar-wagon">
  <!-- Logo -->
  <a href="/" class="navbar-wagon-brand">
    <img src="images/logo.jpg" "width="100" height="80"" />
  </a>

  <!-- Right Navigation -->
    <a href="intranet.php" class="navbar-wagon-item navbar-wagon-button btn">Intranet</a>
  </div>
</div>
</body>
</html>
