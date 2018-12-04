<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Data Kepegawaian</h3>
	</div>
	<div class="panel-body">
		<br>
		<a href="?page=tambah_dokter" class="btn btn-sm btn-primary">Tambah Dokter</a>
		<br>
		<br>
		<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<th>Nama Pegawai</th>
					<th>Jabatan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$query = mysqli_query($con, "SELECT * FROM user WHERE level='Dokter'");
				while($data = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $data['nama'] ?></td>
					<td><?php echo $data['level'] ?></td>
					<td>
						<a href="?page=edit_pasien&id=<?php echo $data['id_pasien']; ?>" class="btn btn-sm btn-warning">EDIT</a>
						<a href="?page=hapus_pasien&id=<?php echo $data['id_pasien']; ?>" class="btn btn-sm btn-danger">HAPUS</a>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>