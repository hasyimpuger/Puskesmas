<?php

if(isset($_POST['simpan'])) {
    $id_pendaftaran = $_POST['id_pendaftaran'];
	$no_antrian = $_POST['no_antrian'];
	$id_pasien = $_POST['id'];
	$dokter = $_POST['dokter'];

	mysqli_query($con, "UPDATE pendaftaran SET id_pasien='$id_pasien', id_user='$dokter', no_antrian='$no_antrian' WHERE id_pendaftaran='$id_pendaftaran'");
	echo "<meta http-equiv='refresh' content='1;url=?page=antrian'>";
}