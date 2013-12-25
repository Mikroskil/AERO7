<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
?><script language='javascript'> document.location='../Main.html'</script><?php
} else {
unset($_SESSION);
session_destroy();
?> <script language='javascript'> document.location='../Main.html'</script><?php
}
?>