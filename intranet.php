<?php #This is the intranet front page, where user able to come without logging in, or if the user already logged in, will able to see the results of the different modules without logging in.
require 'includes.php';
include("layouts/header.php");
if (isset($_SESSION['is_auth'])) {
    $name = '<div class="welcome text-center"><b>' . 'Welcome ' . $_SESSION['username'] . ' to Intranet! </b></div>';
    echo $name;
}

?>

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
      <?php include("layouts/footer.php"); ?>
