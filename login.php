<?php #this is a login page where login form displayed to the user 
session_start();
require_once 'includes.php'; 
include 'layouts/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->login();
    die;
}
?>
<!-- <!DOCTYPE html> -->
<html>
  <head>
      <title>Login</title>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="stylesheets/style.css">
      <title>login</title>
  </head>
  <body >
    <div class="container">
      <div class="row">
        <div id="box">
          <form class="formbox"name="login" method="post" accept-charset="utf-8">
            <ul>
              <label for="username">Please enter your username!</label><br>
                <?php
                if(isset($_POST['subject'])) {
                  echo '<input type="text" name="username" value="admin" readonly><br>';
                } else {
                  echo '<input type="text" name="username" placeholder="username"><br>';
                }
                
                ?>
              <label for="password">Please enter your password!</label><br>
              <input type="password" name="password" placeholder="password"><br>
              <li id="loginbutton">
                <input type="submit" value="Login">
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </body>
<?php include 'layouts/footer.php'; ?>
</html>
