<?php
include "koneksi.php";

$gambar = $_FILES['foto']['name'];



if($gambar == "0"){
	
	echo"<script>alert('Kosong cuy',document.location.href='Test.html')</script>
	";}
else {
$folderupload='../file/';
$uploadfile = $folderupload . basename($_FILES['foto']['name']);
move_uploaded_file($_FILES['foto']['tmp_name'],$uploadfile);
mysql_query("insert into file values ('','$gambar')");

echo "<script>alert('berhasil di upload',document.location.href='Main.html')</script>
";
}
?>
