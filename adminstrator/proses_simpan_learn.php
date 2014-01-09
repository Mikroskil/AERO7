<?php
include "koneksi.php";

$judul=$_POST['judul'];
$sub_judul=$_POST['sub_judul'];
$judul_isi=$_POST['judul_isi'];
$isi=$_POST['isi'];
$gambar = $_FILES['foto']['name'];



if($judul == ""){
	
	echo"<script>alert('Kosong judul cuy',document.location.href='index1.php')</script>
	";}
elseif($sub_judul == ""){
	
	echo"<script>alert('Kosong  sub judul cuy',document.location.href='index1.php')</script>
	";
	}	
elseif($judul_isi == ""){
	
	echo"<script>alert('Kosong  judul isi cuy',document.location.href='index1.php')</script>
	";
	}	
	
elseif($isi == ""){
	
	echo"<script>alert('Kosong  isi cuy',document.location.href='Learn.php')</script>
	";
	}	
elseif($gambar == "0"){
	echo"<script>alert('Kosong cuy',document.location.href='Learn.php')</script>
	";
	}	
	
else {
	$folderupload='file/';
$uploadfile = $folderupload . basename($_FILES['foto']['name']);
move_uploaded_file($_FILES['foto']['tmp_name'],$uploadfile);

$sa=mysql_query("insert into learn values ('','$judul','$sub_judul','$judul_isi','$isi','$gambar')");

echo "<script>alert('berhasil disimpan',document.location.href='Learn.php')</script>
";
}
?>
