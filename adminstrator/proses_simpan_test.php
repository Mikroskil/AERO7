<?php
include "koneksi.php";

$nama=$_POST['nama'];



if($nama == ""){
	
	echo"<script>alert('Kosong cuy',document.location.href='index1.php')</script>
	";}
else {
	
$sa=mysql_query("insert into test values ('','$nama')");

echo "<script>alert('berhasil disimpan',document.location.href='Test.php')</script>
";
}
?>
