

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
            
            <li class="active"><a href="Learn.php">Learn</a></li>
            <li><a href="Test.php">Test</a></li>
			<li><a href="index1.php">Rank</a></li>
			<li><a href="logout.php">Logout</a></li>
		  </ul> 
        </div>
      </div>
      </div>
	
	<div id="spasi">
	</div>
	
	<div class="container">
		
		<div class="row">
        <form action="proses_simpan_learn.php" method="POST" enctype="multipart/form-data">
        
			<table width="68%" class="table table-hover">
			<tr>
				
				
			<tr>	<td><h4>Judul</h4></td><td><h4><strong>:</strong></h4></td><td><textarea name="judul" cols="10" rows="1"></textarea></td></tr>
            
            <tr>	<td><h4>Sub Judul</h4></td><td><h4><strong>:</strong></h4></td><td><textarea name="sub_judul" cols="40" rows="2"></textarea></td></tr>
			
<tr>	<td><h4>Judul Isi</h4></td><td><h4><strong>:</strong></h4></td><td><textarea name="judul_isi" cols="35" rows="1"></textarea></td></tr>

<tr>	<td><h4>Isi</h4></td><td><h4><strong>:</strong></h4></td><td><textarea name="isi" cols="60" rows="2"></textarea></td></tr>

<tr>	<td><h4>Contoh</h4></td><td><h4><strong>:</strong></h4></td><td><input name="foto" type="file"></td></tr>

            <tr><td colspan="2"><input type="submit" value="simpan"></td>
			</tr>

            
           
			</table></form>
		</div>
		
	</div>
		
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>