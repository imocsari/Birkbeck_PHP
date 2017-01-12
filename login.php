<?php #this is a login page where login form displayed to the user 
require_once 'functions/includes.php'; 
include 'layouts/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->login();
    die;
}
?>
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
<?php include 'layouts/footer.php'; ?>