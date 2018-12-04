<?php

if(isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['no_hp'];
	$tanggal = $_POST['tanggal'];
	$jkelamin = $_POST['jkelamin'];
	$agama = $_POST['agama'];

	mysqli_query($con, "INSERT INTO pasien SET nama='$nama', alamat='$alamat', no_hp='$nohp', tanggal_lahir='$tanggal', jenis_kelamin='$jkelamin', agama='$agama'");
	echo "<meta http-equiv='refresh' content='1;url=?page=pasien'>";
}