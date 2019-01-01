<?php
include "../koneksi.php";
$mulai = $_GET['mulai'];
$akhir = $_GET['akhir'];

$query = mysqli_query($con, "SELECT * FROM diagnosis, resep WHERE (diagnosis.tanggal BETWEEN '$mulai' AND '$akhir') AND resep.status='Selesai'");

?>
<h2 align="center">Data Obat Keluar</h2>
<hr>
<p align="center"><b><?php echo $mulai." Sampai ".$akhir ?></b></p>
<table cellspacing="0" cellpadding="5" border="1">
	<thead>
		<tr>
			<th width="300px">Nama Obat</th>
			<th width="200px">Jenis</th>
			<th width="150px">Jumlah Keluar</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while($data = mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $data['nama_obat'] ?></td>
				<td><?php echo $data['jenis_obat'] ?></td>
				<td><?php echo $data['jumlah'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>

