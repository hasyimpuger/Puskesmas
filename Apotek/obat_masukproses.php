<?php
if(isset($_POST['simpan'])) {
	$obat = $_POST['obat'];
	$jumlah = $_POST['jumlah'];
	$tanggal = date("Y-m-d");

	mysqli_query($con, "INSERT INTO obat_masuk SET id_obat='$obat', jumlah = '$jumlah', tanggal = '$tanggal'");
	echo "<meta http-equiv='refresh' content='1;url=?page=obat_masuk'>";
}
