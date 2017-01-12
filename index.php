<?php #Imre Mocsari FMA coursework for Web Programming using PHP (2016_17) module
include("layouts/header.php");
require 'includes.php';
if(!empty($_GET['status'])){
  echo '<div style="padding-top:200px; padding-bottom:800px; font-weight: bold; color: white; text-align:center; font-size:30px"><p>Successfully logged out!</p><br><p style="padding-top:50px;">Redirecting to homepage!</p></div>';
  header("Refresh: 1; url=index.php");
}
if (isset($_SESSION['is_auth'])) {
    $name = '<div class="welcome text-center"><b>' . 'Welcome ' . $_SESSION['username'] . ' to Homepage! </b></div>';
    echo $name;
}
?>

  <div class="maintext">
    <h3>The Department of <b style="color:#fcab0e;">Computer Science</b> and Information Systems at Birkbeck</h3>
      <div id="secondline">
        <p>One of the first computing departments established in the UK and we will be celebrating our 60th anniversary in 2017. We provide a stimulating teaching and research environment for both part-time and full-time students, and a friendly, inclusive space for learning, working and collaborating.</p>
      </div>
  </div>