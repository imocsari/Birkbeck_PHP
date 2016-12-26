<?php
session_start();
require 'includes.php';
include("layouts/header.php");
if (isset($_SESSION['is_auth'])) {
    $r = '<div class="welcome text-center"><b>' . 'Welcome ' . $_SESSION['username'] . ' to Intranet! </b></div>';
    echo $r;
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Raleway:300,400,500,700">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="components/card.css">
   </head>
   <br>
   <body>
      <h2 class="text-center">INTRANET</h2>
       <div class="container">
         <div class="row">
           <div class="col-xs-12 col-sm-4">
             <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('images/uni1.jpg');">
               <div class="card-description">
                 <h2>DT results</h2>
                 <p>Introduction to Database Technology</p>
               </div>
               <a class="card-link" href="content/DTresults.php" ></a>
             </div>
           </div>
           <div class="col-xs-12 col-sm-4">
             <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('images/uni2.jpg');">
               <div class="card-description">
                 <h2>P1 results</h2>
                 <p>Web Programming using PHP</p>
               </div>
               <a class="card-link" href="content/P1results.php" ></a>
             </div>
           </div>
           <div class="col-xs-12 col-sm-4">
             <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('images/uni3.jpg');">
               <div class="card-description">
                 <h2>PfP results</h2>
                 <p>Problem Solving for Programming</p>
               </div>
               <a class="card-link" href="content/PfPresults.php" ></a>
             </div>
           </div>
         </div>
       </div>
   </body>
      <?php include("layouts/footer.php"); ?>
 </html>
