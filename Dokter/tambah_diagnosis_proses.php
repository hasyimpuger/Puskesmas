<?php
if(isset($_POST["simpan"])) {
	$id = $_POST["id"];
	$no_antrian = $_POST['no_antrian'];
	$keluhan = $_POST["keluhan"];
	$tanggal = date("Y-m-d");
	$dokter = $_SESSION['nama'];

	$query = mysqli_query($con, "INSERT INTO diagnosis SET id_pasien = '$id', diagnosa = '$keluhan', tanggal = '$tanggal', dokter='$dokter', no_antrian = '$no_antrian'");
	echo "<meta http-equiv = 'refresh' content = '1;url=?page=addobat&id=".$id."&no_antrian=".$no_antrian."'>";

}