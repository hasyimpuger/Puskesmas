<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>Data Obat</h3>
	</div>
	<div class="panel-body">
		<br>
		<a href="?page=tambah_obat" class="btn btn-sm btn-primary">Tambah Data Obat</a>
		<br>
		<br>
		<table class="table table-bordered table-responsive" id="myTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Obat</th>
					<th>Expired</th>
					<th>Stok</th>
					<th>Satuan</th>
					<td>Aksi</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				$query = mysqli_query($con, "SELECT * FROM obat");
				$no=1;
				while($data = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data['nama_obat'] ?></td>
						<td><?php echo $data['expired'] ?></td>
						<td><?php echo $data['stok_obat'] ?></td>
						<td><?php echo $data['satuan'] ?></td>
						<td><a href="?page=edit_obat&id=<?php echo $data['id_obat'] ?>" class="btn btn-sm btn-warning">Edit</a>
						<a href="?page=hapus_obat&id=<?php echo $data['id_obat'] ?>" class="btn btn-sm btn-danger">Hapus</a></td>
					</tr>
					<?php
					$no++;
				}
				?>
			</tbody>
		</table>
	</div>
</div>