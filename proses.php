<?php
session_start;
include "koneksi.php";

if (isset($_POST['login'])){
 $nama=$_POST['User'];
 $password=$_POST['password'];


$sa=mysql_query("select * from sign_up where username='$_POST[User]' and password='$_POST[password]'");
$c=mysql_fetch_array($sa);


if ($nama!=$c[username] and $password!=$c[password])  {




	
	?>
	
	
<script>alert('Username dan anda kosong',document.location.href='Login.html')</script>    
<?php }
else {
	$username = $c[username];
	$password = $c[password];
	
	$_SESSION['username']=$nama;
	$_SESSION['password']=$password;
?>  
<script>alert('berhasil',document.location.href='admin/Main.html')</script>
<?php
}
}
?>