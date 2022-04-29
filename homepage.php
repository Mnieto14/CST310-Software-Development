<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Homepage</title>
<link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css">
<link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css">
<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body class="index">
<div id="fb-root"></div>
<div class="contain-to-grid"> <nav class="top-bar" data-topbar=""> </nav><br>
<a href="#">
</a>
<br><br><br><br><br>
<ul>
<li><a href="logout.php"><span>Logout</span></a><span>
&nbsp; &nbsp;&nbsp;</span><a href="profile.php"><span>Profile</span></a><span>
</li>
</ul>
<ul class="title-area">
</ul>
<section class="top-bar-section"><!-- Right Nav Section -->
</section>
<ul class="right">
<li class=""><a href="logout.php">Logout</a></li>
<li class=""><a href="profile.php">Profile &nbsp;&nbsp;&nbsp;</a></li>
</ul>
</div>
<div id="wrapper">
<div style="text-align: center;"></div>
<div class="hero">
<div style="text-align: center;"></div>
<div class="row">
<div style="text-align: center;"></div>
<div class="large-12 columns">
<div style="text-align: center;">
</div>
</div>
<div class="container text-center">
<?php
session_start();
if(isset($_SESSION['firstName'])) {
	$firstName = $_SESSION['firstName'];
	$lastName = $_SESSION['lastName'];
	echo "<center><h1>Welcome to the Home Page</center></h1>";
	echo "<center><h2>You are successfully logged in</center></h2>";
	echo "<h3>$firstName $lastName</h23>";
}
else {
	header("Location: index.php");
}
?>
</div>
</div>
</div>
<div style="text-align: center;"><br>
</div>
<footer> </footer>
<?php require 'footer.php';?>
</div></ul></div></body></html>