<?php
if(isset($_POST["simpan"])) {
	$id = $_POST["id"];
	$keluhan = $_POST["keluhan"];
	$obat = $_POST["obat"];
	$tanggal = date("Y-m-d");
	$dokter = $_SESSION['nama'];

	$query = mysqli_query($con, "INSERT INTO diagnosis SET id_pasien = '$id', diagnosa = '$keluhan', obat = '$obat', tanggal = '$tanggal', dokter='$dokter'");
	echo "<meta http-equiv = 'refresh' content = '1;url=?page=riwayatpasien&id=".$id."'>";

}