<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Pasien yang Ditangani</h3>
	</div>
	<div class="panel-body">
		<table class="table table-responsive table-bordered" id="myTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Pasien</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = mysqli_query($con, "SELECT * FROM diagnosis, pasien WHERE diagnosis.id_pasien=pasien.id_pasien AND diagnosis.dokter='$nama'");
				$no=1;
				while($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $row['nama'] ?></td>
						<td>
							<a href="?page=detail_pasien&no_antrian=<?php echo $row['no_antrian'] ?>" class="btn btn-sm btn-primary">Detail</a>
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