<?php
$host = "localhost";
$username = "root";
$password = "";
$databasename = "akedemikdb";
$connection = mysql_connect($host, $username, $password) or die("Adong kesalahan Koneksi ... !!");
mysql_select_db($databasename, $connection) or die("Database na Error bah");
?>