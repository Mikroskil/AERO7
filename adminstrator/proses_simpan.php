<?php
include "koneksi.php";

$no_induk=$_POST['no_induk'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$points=$_POST['points'];


if($nama == ""){
	
	echo"<script>alert('Kosong cuy',document.location.href='index1.php')</script>
	";}
else {
	
$sa=mysql_query("insert into customer values ('$no_induk','$nama','$jk','$points')");

echo "<script>alert('berhasil disimpan',document.location.href='index1.php')</script>
";
}
?>
