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
        </form>';
            echo $r;
        endif;
        ?>
        <br>
</section>
<div class="text-center">
  <form action="<?php echo $self; ?>" method="post"> <!-- This file will receive the data; post means data will be passed to server as a seperate file -->
    <fieldset>
      <!-- important to use meaningful names for the name tags, as they are the $_POST array keys -->
      <!-- NOTE THE ADDITION OF THE DATA ERROR VARIABLES -->
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
                placeholder="Username"
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
