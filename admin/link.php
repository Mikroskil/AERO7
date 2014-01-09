<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Algoritma dan komputer</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.0.2/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/B_Sort.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>
	
    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle">+<i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle">-<i class="fa fa-times"></i></a>
        <li class="sidebar-brand"><a href="Learn.php">Back To Learn</a></li>
		<li class="sidebar-brand"><?php
			$no_urut=$_GET['no_urut'];
            include "koneksi.php";
            $a=mysql_query("select * from learn where no_urut='$_GET[no_urut]'");
            $baris=mysql_fetch_array($a);
            
            ?><a href="#"><?php echo "$baris[judul]" ?></a></li>
        <li><a href="#top">Home</a></li>
        <li><a href="#about">Pengertian</a></li>
        <li><a href="#services">Pseudocode</a></li>
		<li><a href="#portfolio">Contoh</a></li>
      </ul>
    </div>
    <!-- /Side Menu -->
  
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
      <?php
			$no_urut=$_GET['no_urut'];
            include "koneksi.php";
            $a=mysql_query("select * from learn where no_urut='$_GET[no_urut]'");
            $baris=mysql_fetch_array($a);
            
            ?>
        <h1><?php echo "$baris[judul]" ?> </h1>
        <a href="#about" class="btn btn-default btn-lg">LETS LEARN!</a>      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- Intro -->
    <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2>Pengertian</h2>
			<?php
			$no_urut=$_GET['no_urut'];
            include "koneksi.php";
            $a=mysql_query("select * from learn where no_urut='$_GET[no_urut]'");
            $baris=mysql_fetch_array($a);
            
            ?>
            <p class="lead"><?php echo"$baris[sub_judul]" ?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- /Intro -->
  
    <!-- Services -->
    
    <?php
			$no_urut=$_GET['no_urut'];
            include "koneksi.php";
            $a=mysql_query("select * from learn where no_urut='$_GET[no_urut]'");
            $baris=mysql_fetch_array($a);
            
            ?>
    <div id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2>Pseudocode</h2>
            <hr>
			<p><?php echo "$baris[judul_isi]" ?></p>
			 <div class="text-left">
			 <pre>
			 <?php echo"$baris[isi]" ?> 
			</pre>
			</div>
          </div>
        </div>
        
        
      </div>
    </div>
    <!-- /Services -->

    <!-- Callout -->
    <div class="callout">
      <div class="vert-text">
        <h1></h1>
      </div>
    </div>
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Contoh</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <div class="portfolio-item">
			<?php
              echo"<img src=\"../adminstrator/file/$baris[file]\"width=\"120\" height=\"100\">";?></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Portfolio -->

    <!-- Call to Action -->
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h6>Copyright &copy; 2013 AERO 7</h6>
          </div>
        </div>
      </div>
    </div>
    <!-- /Call to Action -->


    <!-- JavaScript -->
    <script src="bootstrap-3.0.2/dist/js/jquery-1.10.2.js"></script>
    <script src="bootstrap-3.0.2/dist/js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>

  </body>

</html>