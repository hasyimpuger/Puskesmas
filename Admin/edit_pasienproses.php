<?php
if(isset($_POST['simpan'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['no_hp'];
	$tanggal = $_POST['tanggal'];
	$jkelamin = $_POST['jkelamin'];
	$agama = $_POST['agama'];

	mysqli_query($con, "UPDATE pasien SET nama='$nama', alamat='$alamat', no_hp='$nohp', tanggal_lahir='$tanggal', jenis_kelamin='$jkelamin', agama='$agama' WHERE id_pasien='$id'");
	echo "<meta http-equiv='refresh' content='1;url=?page=pasien'>";
}