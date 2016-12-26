<?php
session_start();
include("layouts/header.php"); 
if(!empty($_GET['status'])){
  echo '<div style="padding-top:200px; padding-bottom:800px; font-weight: bold; color: white; text-align:center; font-size:30px"><p>Successfully logged out!</p><br><p style="padding-top:50px;">Redirecting to homepage!</p></div>';
  header("Refresh: 3; url=index.php");
}
if (isset($_POST['submit']) and $_POST['submit']=='logout'){
if(!isset($_SESSION)){session_start();};
unset($_SESSION['id']);
header('Location:index.php');
exit();
if(!empty($_GET['status'])){
  echo '<div>You have been logged out!</div>';
}
}

?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     <title>DSC</title>
   </head>
   <body>
     <div class="text">
     <h3>The Department of <b style="color:#fcab0e;">Computer Science</b> and Information Systems at Birkbeck</h3>
   <div id="secondline"><p>One of the first computing departments established in the UK and we will be celebrating our 60th anniversary in 2017. We provide a stimulating teaching and research environment for both part-time and full-time students, and a friendly, inclusive space for learning, working and collaborating.</p></div>
    </div>
   </body>
   <?php include("layouts/footer.php"); ?>
 </html>
