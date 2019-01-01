<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Data Kunjungan Pasien</h3>
	</div>
	<div class="panel-body">
		<form method="POST" class="form-horizontal">
			<div class="form-group">
				<label for="" class="label-control col-md-2">Pilih Tanggal</label>
				<div class="col-md-3">
					<input type="text" name="mulai" class="form-control" id="date" required="">
				</div>
				<div class="col-md-3">
					<input type="text" name="akhir" class="form-control" id="date" required="">
				</div>
				<div class="col-md-3">
					<input type="submit" name="cari" value="Cari" class="btn btn-md btn-primary">
				</div>
			</div>
		</form>
		<?php
		if(isset($_POST['cari'])) {
			$mulai = $_POST['mulai'];
			$akhir = $_POST['akhir'];
			
			$query = mysqli_query($con, "SELECT * FROM diagnosis, pasien WHERE (diagnosis.tanggal BETWEEN '$mulai' AND '$akhir')");
			?>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No Antrian</th>
						<th>Nama Pasien</th>
						<th>Jenis Kelamin</th>
						<th>Dokter Menangani</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($data = mysqli_fetch_array($query)) {
						?>
						<tr>
							<td><?php echo $data['no_antrian'] ?></td>
							<td><?php echo $data['nama'] ?></td>
							<td><?php echo $data['jenis_kelamin'] ?></td>
							<td><?php echo $data['dokter'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php
		}
		?>
	</div>
</div>