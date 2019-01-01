<div class="panel panel-defult">
	<div class="panel-heading">
		<h3>Laporan</h3>
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
		<hr>
		<?php
		if(isset($_POST['cari'])) {
			$mulai = $_POST['mulai'];
			$akhir = $_POST['akhir'];

			$query = mysqli_query($con, "SELECT * FROM diagnosis, resep WHERE (diagnosis.tanggal BETWEEN '$mulai' AND '$akhir') AND resep.status='Selesai'");
			?>
			<h4>Obat Keluar</h4>

			<p><b><?php echo $mulai." Sampai ".$akhir;  ?></b></p>
			<button type="button" class="btn btn-md btn-primary" onclick="window.open('cetak.php?mulai=<?php echo $mulai; ?>&akhir=<?php echo $akhir ?>','mywindow','width=700, height=500')"><i class="fa fa-print fa-fw"></i> Cetak</button>
		
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Obat</th>
					<th>Jenis</th>
					<th>Jumlah Keluar</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($data = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $data['nama_obat'] ?></td>
						<td><?php echo $data['jenis_obat'] ?></td>
						<td><?php echo $data['jumlah'] ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<?php
		}
		?>
	</div>
</div>