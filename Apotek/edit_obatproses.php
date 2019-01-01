<?php 
if(isset($_POST['simpan'])) {
	$id= $_POST['id'];
	$nama = $_POST['nama'];
	$stok = $_POST['stok'];
	$satuan = $_POST['satuan'];
	$tanggal = $_POST['tanggal'];

	mysqli_query($con, "UPDATE obat SET nama_obat='$nama', stok_obat = '$stok', satuan = '$satuan', expired='$tanggal' WHERE id_obat='$id'");
	echo "<meta http-equiv='refresh' content='1;url=?page=obat'>";
}