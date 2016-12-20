<?php
session_start();
require_once 'includes.php';
include 'layouts/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->login();
    die;
}
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

            <li>
                <label for="username">Please enter your username!</label>
            </li>
            <li>
                <input type="text" name="username" placeholder="username">
            </li>
            <li>
                <label for="password">Please enter your password!</label>
            </li>
            <li>
                <input type="password" name="password" placeholder="password">
            </li>
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
