

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

    <link href="../bootstrap-3.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  	<link rel="stylesheet" href="../css/main.css">

  <body>  
	
	  <div id="navigasi" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
	  	<div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="../images/tutwuri.jpg" alt="" height="40"> SMA Negeri 1 Ujung Padang</a></img>
        </div>
		<div class="nav navbar-nav navbar-right">
          <ul class="nav nav-pills">
            <li><a href="Main.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Learn.php">Learn</a></li>
            <li class="active"><a href="Test.html">Test</a></li>
			<li><a href="Contact.html">Contact Us</a></li>
			<li><a href="Rank.php">Rank</a></li>
			<li><a href="logout.php">Logout</a></li>   
		  </ul> 
        </div>
      </div>
      </div>
	
	<div id="spasi">
	</div>
	
    
        
        
	<div class="jumbotron">
    <div class="list-group">
        <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">1. Mudah
        <span class="glyphicon glyphicon-star"></span>
        </h4>
        <p class="list-group-item-text">Urutkan list berikut menggunakan Bubble Sort</p>
        <p class="list-group-item-text">A=[100,40,30,20,50,60,70]</p>
        
        </a>
	
    
    
        <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">2. Mudah
        <span class="glyphicon glyphicon-star"></span>
        </h4>
       <p class="list-group-item-text">Urutkan list berikut menggunakan Insertion Sort</p>
        <p class="list-group-item-text">B=[5,7,10,9,3]</p>
        </a>
	
    
    
        <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">3. Mudah
        <span class="glyphicon glyphicon-star"></span>
        </h4>
        <p class="list-group-item-text">Urutkan list berikut menggunakan Bubble Sort</p>
        <p class="list-group-item-text">C=[10,33,22,25,11]</p>
        </a>
	
    
    
        <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">4. Sulit
        <span class="glyphicon glyphicon-fire"></span>
        </h4>
        <p class="list-group-item-text">Urutkan list berikut menggunakan Merge Sort</p>
        <p class="list-group-item-text">D=[2,3,5,1,4,7]</p>
        </a>
	
    
  <?php
  include "koneksi.php";
  
$b=4;
 
  $a=mysql_query("select * from test");
  
  while ($baris=mysql_fetch_array($a)){
	 $b++;
  
 
?> 
 
        <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading"><?php echo "$b"; ?>. Sulit   <span class="glyphicon glyphicon-fire"></span>
        
        </h4>
        <p class="list-group-item-text"><?php echo"$baris[isi]"; ?></p>
        
        </a>
        <?php
 } ?>
	</div>
    </div>
    
    <div class="text-center">
        <a href="#">
        <h5>Instruksi: Kumpulkan jawaban dengan format(.docx/.doc)</h5>
		</a>  
        <form action="proses_file.php" method="post" enctype="multipart/form-data">
        <center>
          <input name="foto" type="file" size="10">
        </center>
        <center><input type="submit" value="Upload"></center></form>
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