<?php
include "koneksi.php";

$nama=$_POST['User'];
$pass=$_POST['password'];
$email=$_POST['email'];
$nama_lengkap=$_POST['nama_lengkap'];
$no_induk=$_POST['no_induk'];
$jk=$_POST['radio'];

if($nama == ""){
	
	echo"<script>alert('Kosong cuy',document.location.href='sign_up.html')</script>
	";}
else {
	
$sa=mysql_query("insert into sign_up values ('$_POST[User]','$_POST[password]','$_POST[email]','$no_induk','$jk','$nama_lengkap')");

echo "<script>alert('berhasil disimpan',document.location.href='admin/Contact.html')</script>
";
}
?>
