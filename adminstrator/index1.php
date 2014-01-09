

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
            
            <li><a href="Learn.php">Learn</a></li>
            <li><a href="Test.php">Test</a></li>
			<li class="active"><a href="index1.php">Rank</a></li>
			<li><a href="logout.php">Logout</a></li>
		  </ul> 
        </div>
      </div>
      </div>
	
	<div id="spasi">
	</div>
	
	<div class="container">
		
		<div class="row">
        <form action="proses_simpan.php" method="POST">
        
			<table width="68%" class="table table-hover">
			<tr>
				
				<td>Nomor Induk :</td><td><input type="text" name="no_induk" ></td></tr>
			<tr>	<td>Nama :</td><td><input type="text" name="nama" ></td></tr>
			<tr>	<td>Jenis Kelamin:</td><td><input type="radio" value="pria" name="jk">pria<input type="radio" value="wanita" name="jk">wanita</td></tr>
				<tr><td>Points</td><td><input type="text" name="points" ></td>
			</tr>
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