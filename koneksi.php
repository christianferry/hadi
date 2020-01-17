<?php
$host = "localhost";
$user = "id12261286_hadi";
$pass = "ceragem1233";
$name = "id12261286_hadi";

//$koneksi = mysqli_connect($host, $user, $pass, $name);
$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>