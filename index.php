<?php #Imre Mocsari FMA coursework for Web Programming using PHP (2016_17) module
session_start();
include("layouts/header.php"); 
if(!empty($_GET['status'])){
  echo '<div style="padding-top:200px; padding-bottom:800px; font-weight: bold; color: white; text-align:center; font-size:30px"><p>Successfully logged out!</p><br><p style="padding-top:50px;">Redirecting to homepage!</p></div>';
  header("Refresh: 3; url=index.php");
}
if (isset($_SESSION['is_auth'])) {
    $name = '<div class="welcome text-center"><b>' . 'Welcome ' . $_SESSION['username'] . ' to Homepage! </b></div>';
    echo $name;
}
?>
<!-- This is the front page of the application, including the login function, header and footer -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <title>index</title>
  </head>
  <body>
    <div class="text">
     <h3>The Department of <b style="color:#fcab0e;">Computer Science</b> and Information Systems at Birkbeck</h3>
      <div id="secondline">
        <p>One of the first computing departments established in the UK and we will be celebrating our 60th anniversary in 2017. We provide a stimulating teaching and research environment for both part-time and full-time students, and a friendly, inclusive space for learning, working and collaborating.</p>
      </div>
    </div>
   </body>
<?php include("layouts/footer.php"); ?>
</html>
