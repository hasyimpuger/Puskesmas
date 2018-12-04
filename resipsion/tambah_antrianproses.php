<?php

if(isset($_POST['simpan'])) {
	$no_antrian = $_POST['no_antrian'];
	$id_pasien = $_POST['id'];
	$dokter = $_POST['dokter'];
	$tanggal = date("Y-m-d");
	$status = "Proses";

	mysqli_query($con, "INSERT INTO pendaftaran SET id_pasien='$id_pasien', id_user='$dokter', no_antrian='$no_antrian', tanggal='$tanggal', status='$status'");
	echo "<meta http-equiv='refresh' content='1;url=?page=antrian'>";
}