<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname	  = "dbuser";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname);
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
} else {
	// echo "berhasil";
}
