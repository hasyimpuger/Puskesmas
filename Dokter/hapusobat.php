<?php

if(isset($_GET['no_antrian'])) {
	$id_resep = $_GET['idresep'];
	$no_antrian = $_GET['no_antrian'];
	$jumlah = $_GET['jumlah'];
	$nama_obat = $_GET['nama_obat'];
	$id = $_GET['id'];

	$query1 = mysqli_query($con, "DELETE FROM resep WHERE id_resep = '$id_resep'");
	echo "<meta http-equiv = 'refresh' content = '1;url=?page=addobat&id=".$id."&no_antrian=".$no_antrian."'>";
}