<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
<div class="navbar-wagon">
  <!-- Logo -->
  <a href="/" class="navbar-wagon-brand">
    <img src="images/logo.jpg" "width="100" height="80"" />
  </a>

  <!-- Right Navigation -->
  <?php  
  if(isset($_SESSION['username'])){
  echo '<a class="link" href="login.php?action=logout" class="navbar-wagon-item navbar-wagon-button btn"">logout</a>';
  }else{
  echo '<a class="link" href="login.php" style="text-decoration:none">login</a>';
  }
  if($_SESSION['username'] == "admin") {
  echo '<a class="link" href="private.php" style="text-decoration:none">Create user</a>';
}
  ?>
    <a href="intranet.php" class="navbar-wagon-item navbar-wagon-button btn">Intranet</a>
  </div>
</div>
</body>
</html>
