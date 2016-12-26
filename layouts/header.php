<?php
session_start();
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
    <img src="../images/logo.jpg" "width="100" height="80"" />
  </a>
  <?php
      

    
      if(isset($_SESSION['username'])){
        if($_SESSION['username'] == "admin") {
                    echo'<a style="float:right;" class="navbar-wagon-item navbar-wagon-button btn" href="../logout.php">logout</a>';
                    echo '<a style="float:right;" class="navbar-wagon-item navbar-wagon-button btn"style="float:right; "class="navbar-wagon-item navbar-wagon-button btn" href="../intranet.php" class="navbar-wagon-item navbar-wagon-button btn">Intranet</a>';
                    echo '<a style="float:right;" class="navbar-wagon-item navbar-wagon-button btn"<a href="../private.php" style="text-decoration:none">Create user</a>';
        }
        else {
          echo'<a style="float:right;" class="navbar-wagon-item navbar-wagon-button btn" href="../logout.php">logout</a>';
          echo '<a style="float:right;" class="navbar-wagon-item navbar-wagon-button btn" style="float:right; class="link1 "class="navbar-wagon-item navbar-wagon-button btn" type="submit" href="../intranet.php" class="navbar-wagon-item navbar-wagon-button btn">Intranet</a>';
        }
      }
      else {
          echo '<a style="float:right;" class="navbar-wagon-item navbar-wagon-button btn" href="../private.php" style="text-decoration:none">Admin</a>';
          echo '<a style="float:right;" class="navbar-wagon-item navbar-wagon-button btn" style="float:right; "class="navbar-wagon-item navbar-wagon-button btn" href="../intranet.php" class="navbar-wagon-item navbar-wagon-button btn">Intranet</a>';
        }
      
    
  ?>
</div>
</body>
</html>
