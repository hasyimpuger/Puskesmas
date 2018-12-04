<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Nama Pasien</h3>
	</div>
	<div class="panel-body">
		<table class="table tabel-responsive table-bordered" id="myTable">
			<thead>
				<tr>
					<th>Nama Pasien</th>
					<th>Tambah Antrian</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$query = mysqli_query($con, "SELECT * FROM pasien");
				while($data = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?= $data['nama'] ?></td>
					<td><a href="?page=tambah_antrian&id=<?php echo $data['id_pasien'] ?>" class="btn btn-sm btn-primary">Tambah Antrian</a></td>
				</tr>
				<?php 
				}
				?>
			</tbody>
		</table>
	</div>
</div>