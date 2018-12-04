<?php 
if(isset($_POST['simpan'])) {
	$id= $_POST['id'];
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];

	mysqli_query($con, "UPDATE data_obat SET nama_obat='$nama', expired='$tanggal' WHERE id_obat='$id'");
	echo "<meta http-equiv='refresh' content='1;url=?page=obat'>";
}