<?php
include '../koneksi.php';
$mulai = $_GET['mulai'];
$akhir = $_GET['akhir'];
$query = mysqli_query($con, "SELECT * FROM diagnosis, pasien WHERE (diagnosis.tanggal BETWEEN '$mulai' AND '$akhir')");
?>
<div onclick="window.print();">
	<h2 align="center">Data Kunjungan Pasien</h2>
	<p align="center"><?php echo $mulai." Sampai ".$akhir; ?></p>
	<hr>
	<table cellpadding="5" cellspacing="0" border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>No Antrian</th>
				<th width="200px">Nama Pasien</th>
				<th>Jenis Kelamin</th>
				<th width="250px">Dokter Menangani</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no=1;
			while($row = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $row['no_antrian'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['jenis_kelamin'] ?></td>
					<td><?php echo $row['dokter'] ?></td>
				</tr>
				<?php
				$no++;
			}
			?>
		</tbody>
	</table>
</div>