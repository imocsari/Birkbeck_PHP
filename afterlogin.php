<?php
include("layouts/header.php");
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <!-- <link rel="stylesheet" href="style.css"> -->
     <link rel="stylesheet" href="components/afterlogin.css">
     <title></title>
   </head>
   <body>
     <div class="wrapper-grey padded">
       <div class="container">
         <h2 class="text-center">INTRANET</h2>
         <div class="row">
           <div class="col-xs-12 col-sm-4">
             <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('images/uni3.jpg');background-size: 100%;">
               <div class="card-category">Paris</div>
               <div class="card-description">
                 <h2>Anne's home</h2>
                 <a href="content/DTresults.html">Introduction to Database Technology</a>
                 <p>Lovely house</p>
               </div>
               <img class="card-user avatar avatar-large" src="images/uni1.jpg"  height="42" width="42">
               <a class="card-link" href="#" ></a>
             </div>
           </div>
           <div class="col-xs-12 col-sm-4">
             <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('images/uni2.jpg');background-size: 100%;">
               <div class="card-category">Brussels</div>
               <div class="card-description">
                 <h2>Anne's home</h2>
                 <a href="content/DTresults.html">Introduction to Database Technology</a>
                 <p>Lovely house</p>
               </div>
               <img class="card-user avatar avatar-large" src="images/uni2.jpg"  height="42" width="42">
               <a class="card-link" href="#" ></a>
             </div>
           </div>
           <div class="col-xs-12 col-sm-4">
             <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('images/uni1.jpg');">
               <div class="card-category">London</div>
               <div class="card-description">
                 <h2>Anne's home</h2>
                 <a href="content/DTresults.html">Introduction to Database Technology</a>
                 <p>Lovely house</p>
               </div>
               <img class="card-user avatar avatar-large" src="images/uni3.jpg" height="42" width="42">
               <a class="card-link" href="#" ></a>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="text-center padded" id="newsletter">
       <h2>Get news from us</h2>
       <p>Leave us your mail and get news from us</p>
       <form class="form-inline">
         <input type="email" placeholder="bob@gmail.com" class="form-control">
         <input type="submit" value="Subscribe" class="btn btn-primary btn-bordered btn-bordered-primary">
       </form>
     </div>

     <div id="map" style="width: 100%;height: 500px;"></div>

     <div id="footer">
       <div class="container">
         <div class="row">
           <div class="col-xs-4">
             <ul class="list-inline">
               <li><a href=""><i class="fa fa-youtube"></i></a></li>
               <li><a href=""><i class="fa fa-instagram"></i></a></li>
               <li><a href=""><i class="fa fa-facebook"></i></a></li>
               <li><a href=""><i class="fa fa-twitter"></i></a></li>
             </ul>
           </div>
         </div>
       </div>
     <!-- <h1 class="text-center">Intranet</h1>
     <div class="container">
       <div class="row">
         <div >
          <ul class="list text-center list-unstyled">
            <li class="col-xs-12 col-md-4"><a href="content/DTresults.html">DTresults</li>
            <li class="col-xs-12 col-md-4"><a href="content/P1results.html">P1results</li>
            <li class="col-xs-12 col-md-4"><a href="content/PfPresults.html">PfPresults</li>
          </ul>
         </div>

       </div>

     </div> -->

   </body>
   <?php include("layouts/footer.php"); ?>
 </html>
