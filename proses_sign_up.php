<?php
include "koneksi.php";

$nama=$_POST['User'];
$pass=$_POST['password'];
$email=$_POST['email'];


if($nama == ""){
	
	echo"<script>alert('Kosong cuy',document.location.href='sign_up.html')</script>
	";}
else {
	
$sa=mysql_query("insert into sign_up values ('$_POST[User]','$_POST[password]','$_POST[email]')");

echo "<script>alert('berhasil disimpan',document.location.href='Admin/Main.html')</script>
";
}
?>
