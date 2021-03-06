<?php
session_start();
$username		=$_SESSION['username'];
$password			=$_SESSION['password'];

if(!isset($_SESSION['username'])) {
header("location:Main.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Algoritma dan komputer</title>

    <link href="../bootstrap-3.0.2/dist/css/bootstrap.css" rel="stylesheet">
  </head>
  	<link rel="stylesheet" href="../css/main.css">

  <body>  
	
	  <div id="navigasi" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
	  	<div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="images/tutwuri.jpg" alt="" height="40"> SMA Negeri 1 Ujung Padang</a></img>
        </div>
		<div class="nav navbar-nav navbar-right">
          <ul class="nav nav-pills">
            <li class="active"><a href="Main.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Learn.html">Learn</a></li>
            <li><a href="Test.html">Test</a></li>
			<li><a href="Contact.html">Contact Us</a></li>
			<li><a href="Rank.php">Rank</a></li>
			<li><a href="login.html">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
		  </ul> 
        </div>
      </div>
      </div>
	
	<div id="spasi">
	</div>
		
	<div class="container">
      <div class="jumbotron">
        <img src="../images/Techno-1.jpg" alt="..." width="1000" height="400">
      </div>
    </div> 
	
	<div class="container">
		<div class="jumbotron">
		<div class="row">
			<div id="hover-gambar" class="col-md-2">
          		<h5>Bubble Sort</h5>
		  		<a class="btn btn-default" href="Sort_bubble.html" role="button">
				<img src="../images/bubbles.jpg" alt="..." class="img-thumbnail">
				</a>
        	</div>
        	<div id="hover-gambar" class="col-md-2">
          	 	<h5>Insertion Sort</h5>
			  	<a class="btn btn-default" href="Sort_insertion.html" role="button">
				<img src="../images/insert.jpg" alt="..." class="img-thumbnail">
				</a>
			</div>
			<div id="hover-gambar" class="col-md-2">
			  	<h5>Quick Sort</h5>
			  	<a class="btn btn-default" href="Sort_quick.html" role="button">
				<img src="../images/images12.jpg" alt="..." class="img-thumbnail">
				</a>
			</div>
			<div id="hover-gambar" class="col-md-2">
			  	<h5>Merge Sort</h5>
			  	<a class="btn btn-default" href="Sort_merge.html" role="button">
				<img src="../images/index1.jpg" alt="..." class="img-thumbnail">
				</a>
			</div>
			<div id="hover-gambar" class="col-md-2">
			  	<h5>Basic Computer</h5>
			  	<a class="btn btn-default" href="#" role="button">
				<img src="../images/lampu.jpg" alt="..." class="img-thumbnail">
				</a>
			</div>
			<div id="hover-gambar" class="col-md-2">
			  	<h5>Rank</h5>
			  	<a class="btn btn-default" href="Rank.html" role="button">
				<img src="../images/bintang1.jpg" alt="..." class="img-thumbnail">
			  	</a>
		</div>
		</div>
	</div>	
	</div>	
	
	</div>
	<hr class="hr3">
	<div id="tengah"> 
		 <p>
			Copyright &copy; 2013 AERO 7
		 </p>
	 </div>	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
