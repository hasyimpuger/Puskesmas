<?php 
if(isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];

	$query = "INSERT INTO data_obat SET nama_obat='$nama', expired='$tanggal'";
	mysqli_query($con, $query);
	echo "<meta http-equiv='refresh' content='1;url=?page=obat'>";
}