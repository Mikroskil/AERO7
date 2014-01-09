

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
  	<link rel="stylesheet" href="../css/main.css">
  </head>

  <body>

    <div id="navigasi" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
	  	<div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="../images/tutwuri.jpg" alt="" height="40"> SMA Negeri 1 Ujung Padang</a></img>
        </div>
		<div class="nav navbar-nav navbar-right">
          <ul class="nav nav-pills">
            <li><a href="Main.html">Home</a></li>
            <li class="active"><a href="About.html">About</a></li>
            <li><a href="Learn.html">Learn</a></li>
            <li><a href="Test.html">Test</a></li>
			<li><a href="Contact.html">Contact Us</a></li>
			<li><a href="Rank.html">Rank</a></li>
			<li><a href="login.html">Login</a></li>
		  </ul> 
        </div>
      </div>
      </div>
	
	<div id="spasi">
	</div>
	
	<div class="container">
		
		<div class="row">
        <a href="">+add</a><br>
			<table class="table table-hover">
			<tr class="warning">
				<td>#</td>
				<td>Nomor Induk</td>
				<td>Nama</td>
				<td>Jenis Kelamin</td>
				<td>Points</td>
			</tr>
            
            <?php
            include "koneksi.php";
            $a=mysql_query("select * from customer");
            while ($baris=mysql_fetch_array($a)){
            
            ?>
            
			<tr class="danger">
				<td>....</td>
				<td><?php echo $baris[no_induk] ?></td>
				<td><a href="#"><?php echo $baris[nama] ?></a></td>
				<td><?php echo $baris[jk] ?></td>
				<td><?php echo $baris[points] ?></td>
			</tr>
			<?php } ?>
			</table>
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