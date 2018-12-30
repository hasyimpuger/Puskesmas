<?php
include '../koneksi.php';
if(isset($_GET['no_antrian'])) {
	$no_antrian = $_GET['no_antrian'];

	$query = mysqli_query($con, "SELECT * FROM diagnosis, pasien WHERE pasien.id_pasien=diagnosis.id_pasien AND diagnosis.no_antrian='$no_antrian'");
	$data = mysqli_fetch_array($query);

	$query1 = mysqli_query($con, "SELECT * FROM diagnosis, resep WHERE diagnosis.no_antrian='$no_antrian'");
}
?>
<div onclick="window.print()">
	<h3 align="center">Resep Obat</h3>
	<hr>
	<br>
	<table>
		<tr>
			<td>No Antrian&nbsp;&nbsp;&nbsp;</td>
			<td>:</td>
			<td><?php echo $no_antrian ?></td>
		</tr>
		<tr>
			<td>Tanggal&nbsp;&nbsp;&nbsp;</td>
			<td>:</td>
			<td><?php echo date("d-m-Y") ?></td>
		</tr>
		<tr>
			<td>Nama Pasien&nbsp;&nbsp;&nbsp;</td>
			<td>:</td>
			<td><?php echo $data['nama'] ?></td>
		</tr>
		<tr>
			<td>Dokter Menangani&nbsp;&nbsp;&nbsp;</td>
			<td>:</td>
			<td><?php echo $data['dokter'] ?></td>
		</tr>
	</table>
	<hr>
	<h5>Resep Obat</h5>
	<table border="1" cellspacing="0" cellpadding="5">
		<thead>
			<tr>
				<th width="200px">Nama Obat</th>
				<th>Jenis</th>
				<th>Jumlah</th>
				<th width="200px">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row = mysqli_fetch_array($query1)) {
				?>
				<tr>
					<td><?php echo $row['nama_obat'] ?></td>
					<td><?php echo $row['jenis_obat'] ?></td>
					<td><?php echo $row['jumlah'] ?></td>
					<td><?php echo $row['keterangan'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>