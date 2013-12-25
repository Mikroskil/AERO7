<?php
session_start;
include "koneksi.php";

$nama=$_POST['User'];
$password=$_POST['password'];

$sa=mysql_query("select * from admin where username='$_POST[User]' and password='$_POST[password]'");
$c=mysql_fetch_array($sa);

if (($c[username] != $nama) and ($c[password] != $password))  {
echo"<script>alert('Username dan password anda tidak valid',document.location.href='index.html')</script>";}

elseif ($nama == ""){
echo"<script>alert('Username dan anda kosong',document.location.href='index.html')</script>";

}
else {
	
	$username = $c[username];
	$password = $c[password];
	
	$_SESSION['username']=$nama;
	$_SESSION['password']=$password;
	
	echo"<script>alert('berhasil',document.location.href='index1.php')</script>";
}


?>