<?php
$host = "localhost"; //Mengambil host database
$user = "root"; // username database
$pass = ""; // password database
$db = "klinik"; // nama databases

//proses koneksi
$con = mysqli_connect($host, $user, $pass, $db);
// if(!$con) {
// 	echo "koneksi eror";
// } else {
// 	echo "koneksi berhasil";
// }