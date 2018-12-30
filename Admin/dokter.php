<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Dokter</h3>
	</div>
	<div class="panel-body">
		<br>
		<a href="?page=tambah_dokter" class="btn btn-sm btn-primary">Tambah Dokter</a>
		<br>
		<br>
		<table class="table table-responsive table-bordered" id="">
			<thead>
				<tr>
					<th>Nama Pegawai</th>
					<th>Id User</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$query = mysqli_query($con, "SELECT * FROM user WHERE level='Dokter'");
				$no=1;
				while($data = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $data['nama'] ?></td>
					<td><?php echo $data['id_user'] ?></td>
					
					<td>
						<a href="?page=edit_dokter&id=<?php echo $data['id_user']; ?>" class="btn btn-sm btn-warning">EDIT</a>
						<a href="?page=hapus_dokter&id=<?php echo $data['id_user']; ?>" class="btn btn-sm btn-danger">HAPUS</a>
					</td>
				</tr>
				<?php
					$no++;
				}
				?>
			</tbody>
		</table>
	</div>
</div>


