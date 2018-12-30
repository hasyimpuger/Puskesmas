<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Antrian Pasien</h3>
	</div>
	<div class="panel-body">
		<br>
		<a href="?page=nama_pasien" class="btn btn-sm btn-info">Tambah Antrian</a>
		<br>
		<br>
		<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<th>No Antrian</th>
					<th>Nama Pasien</th>
					<th>Tanggal</th>
					<th>Dokter yang Menangani</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = mysqli_query($con, "SELECT * FROM pendaftaran");
				while($data = mysqli_fetch_array($query)){
					if($data['status'] == "Proses") {
				?>
				<tr>
					<td><?php echo $data['no_antrian'] ?></td>
					<td>
						<?php
						$query3 = mysqli_query($con, "SELECT * FROM pasien WHERE id_pasien='$data[id_pasien]'");
						while($data3 = mysqli_fetch_array($query3)) {
							echo $data3['nama'];
						}
						?>
					</td>
					<td><?php echo $data['tanggal'] ?></td>
					<td>
						<?php 
						$query4 = mysqli_query($con, "SELECT * FROM user WHERE id_user='$data[id_user]'");
						while($data4 = mysqli_fetcH_array($query4)) {
							echo $data4['nama'];
						}
						?>
					</td>
					<td>
						<a href="?page=edit_antrian&id=<?php echo $data['id_pendaftaran'] ?>" class="btn btn-sm btn-warning">Edit</a>
						<a href="?page=cetak1&id=<?php echo $data['id_pendaftaran'] ?>" class="btn btn-sm btn-warning">Print</a>
						<a href="?page=hapus_antrian&id=<?php echo $data['id_pendaftaran'] ?>" class="btn btn-sm btn-danger">Hapus</a>
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