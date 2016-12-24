<?php
require_once 'includes.php';
include("layouts/header.php");

session_start();

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 
//     $login = (new Login())->logout();
//     die;
// }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<section class="loginform">
        <br>
        <?php
        if (!isset($_SESSION['is_auth'])) :
            echo '<div text-center><b>Login Required!</b></div>';
            header("refresh:3; url=login.php");
            die;
        else:
            $r = '<div class="welcome text-center"><b>' . 'Welcome ' . $_SESSION['username'] . ', please add the new user details! </b></div>';
            $r .= '
            <form action='. $_SERVER['PHP_SELF'] .' method="post" accept-charset="utf-8">
            <div class="text-right"><input type="submit" value="Logout"></div>
        </form>';
            echo $r;
        endif;
        ?>
        <br>
</section>
<div class="text-center">
  <form action="<?php echo $self; ?>" method="post"> <!-- This file will receive the data; post means data will be passed to server as a seperate file -->
    <fieldset>
    <legend>Sign Up</legend>
      <!-- important to use meaningful names for the name tags, as they are the $_POST array keys -->
      <!-- NOTE THE ADDITION OF THE DATA ERROR VARIABLES -->
      <div>  
        <label for="title">Title</label></br>
        <input value="<?php echo $title ?>" 
                type="text" 
                name="title" 
                id="title" 
                size="10"/>
                <?php echo '<span style="color:red">' . $titleError . '</span>'?>
      </div>
      <div>
        <label for="firstname">Firstname</label></br>
        <input value="<?php echo $firstname ?>" 
                type="text" 
                name="firstname" 
                id="firstname" 
                size="35"/>
                <?php echo '<span style="color:red">' . $firstnameError . '</span>'?>
      </div>
      <div>
        <label for="surname">Surname</label></br>
        <input value="<?php echo $surname ?>" 
                type="text" 
                name="surname" 
                id="surname" 
                size="35"/>
                <?php echo '<span style="color:red">' . $surnameError . '</span>'?>
      </div>
      <div>            
        <label for="email">Email</label></br>
        <input value="<?php echo $email ?>" 
                type="text" 
                name="email" 
                id="email" size="40"/>
                <?php echo '<span style="color:red">' . $emailError . '</span>'?>
      </div>
      <div>
        <label for="username">Username</label></br>
        <input value="<?php echo $username ?>" 
                type="text" 
                name="username" 
                id="username" 
                size="35"/>
                <?php echo '<span style="color:red">' . $usernameError . '</span>'?>
      </div>
      <div>
        <label for="password">Password</label></br>
        <input value="<?php echo $password ?>" 
                type="text" 
                name="password" 
                id="password" 
                size="35"/>
                <?php echo '<span style="color:red">' . $passwordError . '</span>'?>
      </div>
      <div>            
        <input type="submit" name="SubmitStatus" value="Submit" />
      </div>
    </fieldset>
  </form>
<!-- <form action="myform.php" method="POST">
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
</form> -->
</div>
</body>
<?php include("layouts/footer.php"); ?>
</html>
