<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>Data Pasien</h3>
	</div>
	<div class="panel-body">
		<br>
		<a href="?page=tambah_pasien" class="btn btn-sm btn-primary">Tambah Pasien</a>
		<br>
		<br>
		<br>
		<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No Hp/Telepon</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$query = mysqli_query($con, "SELECT * FROM pasien");
				while($data = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?= $data['nama'] ?></td>
					<td><?= $data['alamat'] ?></td>
					<td><?= $data['no_hp'] ?></td>
					<td><?= $data['tanggal_lahir'] ?></td>
					<td><?= $data['jenis_kelamin'] ?></td>
					<td><?= $data['agama'] ?></td>
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
