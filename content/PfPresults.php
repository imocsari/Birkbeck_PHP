<?php #intranet pages PfP results, the page visible after login
session_start();
require_once '../functions/includes.php';
include("../layouts/header.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $login = (new Login())->logout();
  die;
}
?>
<?php
if (!isset($_SESSION['is_auth'])){
    echo '<div text-center><b>Login Required!</b></div>';
    header("Location: ../login.php");
    die;
} else {
    $name = '<div class="welcome text-center"><b>' . 'Welcome ' . $_SESSION['username'] . ' to Intranet! </b></div>';
    echo $name;
}
?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Raleway:300,400,500,700">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="../stylesheets/card.css">
    <link rel="stylesheet" href="../stylesheets/content.css">
		<meta charset="utf-8">
		<title>Problem Solving for Programming – PfP Results</title>
	</head>
	<body >
		<h1 class="tabletop text-center">Problem Solving for Programming – PfP Results</h1>
		<table class="container-fluid">
		  <tr>
  			<th>Year</th>
  			<th>Students</th>
  			<th>Pass</th>
  			<th>Fail (no resit)</th>
  			<th>Resit</th>
  			<th>Withdrawn</th>
		  </tr>
		  <tr>
  			<td>2012/13</td>
  			<td>65</td>
  			<td>45</td>
  			<td>7</td>
  			<td>3</td>
  			<td>10</td>
		  </tr>
		  <tr>
  			<td>2013/14</td>
  			<td>55</td>
  			<td>35</td>
  			<td>5</td>
  			<td>15</td>
  			<td>0</td>
		  </tr>
		  <tr>
  			<td>2014/15</td>
  			<td>60</td>
  			<td>45</td>
  			<td>2</td>
  			<td>10</td>
  			<td>3</td>
		  </tr>
		  <tr>
  			<td>2015/16</td>
  			<td>38</td>
  			<td>30</td>
  			<td>8</td>
  			<td>3</td>
  			<td>7</td>
		  </tr>
		</table>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('../images/uni1.jpg');">
						<div class="card-description">
							<h2>DT results</h2>
							<p>Introduction to Database Technology</p>
						</div>
						<a class="card-link" href="DTresults.php" ></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('../images/uni2.jpg');">
						<div class="card-description">
							<h2>P1 results</h2>
							<p>Web Programming using PHP</p>
						</div>
						<a class="card-link" href="P1results.php" ></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('../images/uni3.jpg');">
						<div class="card-description">
							<h2>PfP results</h2>
							<p>Problem Solving for Programming</p>
						</div>
						<a class="card-link" href="PfPresults.php" ></a>
					</div>
				</div>
			</div>
		</div>
	</body>	
<?php include("../layouts/footer.php"); ?>	
</html>
