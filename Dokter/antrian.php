<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Antrian Pasien</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered table-responsive" id="myTable">
			<thead>
				<tr>
					<th>No. Antrian</th>
					<th>Nama</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
		<?php
		$query = mysqli_query($con, "SELECT * FROM pendaftaran");
		while($data = mysqli_fetch_array($query)) {
			if($data['status'] == "Proses") {
		?>
		<tr>
			<td><?php echo $data['no_antrian'] ?></td>
			<td>
				<?php
				$query2 = mysqli_query($con, "SELECT * FROM pasien WHERE id_pasien = '$data[id_pasien]'");
				while($data2 = mysqli_fetch_array($query2)) {
				echo $data2['nama'];
				}
				?>
			</td>
			<td>
				<a href="?page=riwayatpasien&id=<?php echo $data['id_pasien']; ?>&no_antrian=<?php echo $data['no_antrian'] ?>" class="btn btn-sm btn-info">Riwayat Penyakit</a>
			</td>
		</tr>
		<?php
			}
		}
		?>
			</tbody>
		</table>
	</div>
</div>