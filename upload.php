<!DOCTYPE html>
<html lang="en"><head><title>Upload Test</title>
<link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css">
<link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css">
<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"></head>
<body class="index">
<div id="fb-root"></div>
<div class="contain-to-grid"> <nav class="top-bar" data-topbar=""> </nav><br>
<a href="#">
</a>
<ul>
<?php require 'main.php';?>
<div id="wrapper">
<div style="text-align: center;"></div>
<div class="hero">
<div style="text-align: center;"></div>
<div class="row">
<div style="text-align: center;"></div>
<div class="large-12 columns">
<div style="text-align: center;"></div>
<h1 style="text-align: center;">Upload Test</h1>
<div style="text-align: center;">

<?php
$filename = $_FILES['file']['name'];
$location = "C:/xampp/htdocs/employee-portal/tmp/".$filename;

if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
  echo '<p>The php file upload was a success!</p>'; 
} else { 
  echo '<p>The php file upload failed.</p>'; 
}
?>
</div>
</div>
</div>
</div>
<footer> </footer>
<?php require 'footer.php';?>
</div></ul></div></body></html>