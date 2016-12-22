<?php
require_once 'includes.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->logout();
    die;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<section class="loginform text-right">
        <br>
        <?php
        if (!isset($_SESSION['is_auth'])) :
            echo '<b>login Required! you will redirect to login page</b>';
            header("refresh:3; url=login.php");
            die;
        else:
            $r = '<b>' . 'Welcome ' . $_SESSION['username'] . ' to Dasboard </b>';
            $r .= '
        <form action='. $_SERVER['PHP_SELF'] .' method="post" accept-charset="utf-8">
            <input type="submit" value="Click here for logout">
        </form>';
            echo $r;
        endif;
        ?>
        <br>
</section>
<div class="text-center">
<form action="myform.php" method="POST">
  <label for="title">Title</label><br>
  <select name="title">
      <option selected disabled>Choose one</option>
      <option value="Mr">Mr.</option>
      <option value="Mrs">Mrs.</option>
      <option value="Ms">Ms.</option>
      <option value="Dr">Dr.</option>
      <option value="Prof">Prof.</option>
  </select>
<br/>
  <label for="firstname">Enter first name!</label><br>
  <input type="text" name="firstname" placeholder="Stephen"/><br/>
  <label for="surname">Enter surname!</label><br>
  <input type="text" name="surname" placeholder="Hawking"/><br/>
  <label for="email">Enter an e-mail address!</label><br>
  <input type="text" name="email" placeholder="stephenhawking@yahoo.co.uk" /><br/>
  <label for="username">Enter a username!</label><br>
  <input type="text" name="username" placeholder="username"/><br/>
  <label for="password">Enter a password!</label><br>
  <input type="text" name="password" placeholder="********"/><br/>
<p><input type="submit" value="Submit"></p>
</form>
</div>
</body>
</html>
