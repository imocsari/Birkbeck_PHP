<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <title></title>
  </head>
  <body>

  </body>
</html>
<div class="navbar-wagon">
  <!-- Logo -->
  <a href="/" class="navbar-wagon-brand">
    <img src="images/logo.jpg width="200px" height="100px"" />
  </a>

  <!-- Right Navigation -->
  <div class="navbar-wagon-right hidden-xs hidden-sm">
    <!-- Text link -->
    <a href="" class="navbar-wagon-item navbar-wagon-link">Contact</a>

    <!-- Text link -->
    <a href="" class="navbar-wagon-item navbar-wagon-link">Team</a>

    <!-- Notification link-->
    <a href="" class="navbar-wagon-item navbar-wagon-link">
      <div class="badge-container">
        <i class="fa fa-envelope-o"></i>
        <div class="badge badge-blue">3</div>
      </div>
    </a>

    <!-- Profile picture and dropdown -->
    <div class="navbar-wagon-item">
      <div class="dropdown">
        <img src="http://placehold.it/50x50" class="avatar dropdown-toggle" id="navbar-wagon-menu" data-toggle="dropdown">
        <ul class="dropdown-menu dropdown-menu-right navbar-wagon-dropdown-menu">
          <li><a href="#">Profile</a></li>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Log Out</a></li>
        </ul>
      </div>
    </div>

    <!-- Button (call-to-action) -->
    <a href="login.php" class="navbar-wagon-item navbar-wagon-button btn">Intranet</a>
    <a href="login.php" class="navbar-wagon-item navbar-wagon-button btn">Admin</a>
  </div>

  <!-- Dropdown appearing on mobile only -->
  <div class="navbar-wagon-item hidden-md hidden-lg">
    <div class="dropdown">
      <i class="fa fa-bars dropdown-toggle" data-toggle="dropdown"></i>
      <ul class="dropdown-menu dropdown-menu-right navbar-wagon-dropdown-menu">
        <li><a href="#">Some mobile link</a></li>
        <li><a href="#">Other one</a></li>
        <li><a href="#">Other one</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>
