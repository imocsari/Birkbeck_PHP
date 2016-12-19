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
<body>
<section class="loginform">
    <form name="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" accept-charset="utf-8">
        <ul>
            <li>
                <label for="usermail">Email</label>
                <input type="username" name="username" placeholder="Please enter the username" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password" required></li>
            <li>
                <input type="submit" value="Login">
            </li>
        </ul>
    </form>
</section>
</body>
<?php include 'layouts/footer.php'; ?>
</html>
