<?php 
if(isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$stok = $_POST['stok'];
	$satuan = $_POST['satuan'];

	$query = "INSERT INTO obat SET nama_obat='$nama', stok_obat = '$stok', satuan = '$satuan', expired='$tanggal'";
	mysqli_query($con, $query);
	echo "<meta http-equiv='refresh' content='1;url=?page=obat'>";
}