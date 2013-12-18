<?php
session_start;
include "koneksi.php";

$nama=$_POST['User'];
$password=$_POST['password'];
$sa=mysql_query("select * from sign_up where username='$nama' and password='$password'");
$c=mysql_fetch_array($sa);

if(($nama = $c[username]) and ($password = $c[password])){
	$username = $c[username];
	$password = $c[password];
	
	$_SESSION['username']=$nama;
	$_SESSION['password']=$password;
	
	echo"<script>alert('berhasil',document.location.href='admin/Main.html')</script>";


}
else{

echo"<script>alert('Username dan passwor anda tidak valid',document.location.href='Login.html')</script>";

}

?>