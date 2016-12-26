<?php
session_start();
require_once 'includes.php';
include 'layouts/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->login();
    die;
}
// if (isset($_POST['submit']) and $_POST['submit']=='logout'){
// if(!isset($_SESSION)){session_start();};
// unset($_SESSION['username']);
// header('Location:index.php');
// exit();
// }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body >
<div class="container">
<div class="row">
  <div id="box">

    <form class="formbox"name="login" method="post" accept-charset="utf-8">
        <ul>

                <label for="username">Please enter your username!</label><br>
              <?php
              $link=$_GET['link'];
              if ($link == '1') {
                  echo '<input type="text" name="username" value="admin" readonly><br>';
              } else {
                  echo '<input type="text" name="username" placeholder="anyad"><br>';
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
