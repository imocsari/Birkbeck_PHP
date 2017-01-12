<?php
session_start();
require_once 'includes.php';
include("layouts/header.php");
if ((($_SESSION['username']) != 'admin') || ($_SESSION['is_logged_in'] = false)) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="stylesheets/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <section class="loginform">
    <?php
      if (!isset($_SESSION['is_auth'])) {
        echo '<div text-center><b>Login Required!</b></div>';
        header("refresh:3; url=login.php");
        die;
    } else {
        $name = '<div class="welcome text-center"><b>' . 'Welcome ' . $_SESSION['username'] . ', please add the new user details! </b></div>';
        $name .= '
        <form action='. $_SERVER['PHP_SELF'] .' method="post" accept-charset="utf-8"></form>';
        echo $name;
        }
    ?>
  </section>
  <div class="text-center">
    <form action="<?php echo $self; ?>" method="post"> 
      <fieldset>
        <div>  
          <label for="title">Title</label></br>
          <input value="<?php echo $title ?>" 
            type="text" 
            name="title" 
            id="title" 
            placeholder="Mr,Mrs,Miss,Prof, Dr,Sir, etc."
            size="10"/>
            <?php echo '<br><span style="color:#ff8c8c; font-size:22px; font-weight:bold;">' . $titleError . '</span>'?>
        </div>
        <div>
          <label for="firstname">Firstname</label></br>
          <input value="<?php echo $firstname ?>" 
            type="text" 
            name="firstname" 
            id="firstname" 
            placeholder="Charles"
            size="35"/>
            <?php echo '<br><span style="color:#ff8c8c; font-size:22px; font-weight:bold;">' . $firstnameError . '</span>'?>
        </div>
        <div>
          <label for="surname">Surname</label></br>
          <input value="<?php echo $surname ?>" 
            type="text" 
            name="surname" 
            placeholder="Darwin"
            id="surname" 
            size="35"/>
            <?php echo '<br><span style="color:#ff8c8c; font-size:22px; font-weight:bold;">' . $surnameError . '</span>'?>
        </div>
        <div>            
          <label for="email">Email</label></br>
          <input value="<?php echo $email ?>" 
            type="text" 
            name="email" 
            placeholder="myemail@myemail.com"
            id="email" size="40"/>
            <?php echo '<br><span style="color:#ff8c8c; font-size:22px; font-weight:bold;">' . $emailError . '</span>'?>
        </div>
        <div>
          <label for="username">Username</label></br>
          <input value="<?php echo $username ?>" 
            type="text" 
            name="username" 
            id="username" 
            placeholder="Username(letters or digits only!)"
            size="35"/>
            <?php echo '<br><span style="color:#ff8c8c; font-size:22px; font-weight:bold;">' . $usernameError . '</span>'?>
        </div>
        <div>
          <label for="password">Password</label></br>
          <input value="<?php echo $password ?>" 
            type="text" 
            name="password" 
            id="password"
            placeholder="**********" 
            size="35"/>
            <?php echo '<br><span style="color:#ff8c8c; font-size:22px; font-weight:bold;">' . $passwordError . '</span>'?>
        </div>
        <div>            
          <input type="submit" name="SubmitStatus" value="Submit" />
        </div>
      </fieldset>
    </form>
  </div>
</body>
<?php include("layouts/footer.php"); ?>
</html>
