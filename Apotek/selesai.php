<?php

if(isset($_GET['no_antrian'])) {
	$id = $_GET['id'];
	$no_antrian = $_GET['no_antrian'];
	$jumlah = $_GET['jumlah'];
	$nama_obat = $_GET['nama_obat'];

	$sql3 = mysqli_query($con, "SELECT * FROM obat WHERE nama_obat = '$nama_obat'");
	$data = mysqli_fetch_array($sql3);

	if($data['stok_obat'] == 0) {
		echo "<script>alert('Stok Habis')</script>";
		echo "<meta http-equiv='refresh' content='1;url=?page=obatpasien&no_antrian=".$no_antrian."'>";
	} else {
		$sql1 = mysqli_query($con, "UPDATE resep SET status = 'Selesai' WHERE id_resep = '$id'");
		$sql2 = mysqli_query($con, "UPDATE obat SET stok_obat=stok_obat-$jumlah WHERE nama_obat = '$nama_obat'");
		echo "<meta http-equiv='refresh' content='1;url=?page=obatpasien&no_antrian=".$no_antrian."'>";
	}

	
}