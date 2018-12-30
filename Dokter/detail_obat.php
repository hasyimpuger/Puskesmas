<?php
if(isset($_GET['no_antrian'])) {
	$no_antrian = $_GET['no_antrian'];
	$query = mysqli_query($con, "SELECT * FROM diagnosis, pasien WHERE pasien.id_pasien=diagnosis.id_pasien AND diagnosis.no_antrian='$no_antrian'");
	$data = mysqli_fetch_array($query);

	$query1 = mysqli_query($con, "SELECT * FROM diagnosis, resep WHERE diagnosis.no_antrian='$no_antrian'");
}
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Detail Obat</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal">
			<div class="form-group">
				<label for="" class="col-md-2">Nama Pasien</label>
				<div class="col-md-5">
					<input type="text" class="form-control input-sm" readonly="" value="<?php echo $data['nama'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Jenis Kelamin</label>
				<div class="col-md-5">
					<input type="text" class="form-control input-sm" readonly="" value="<?php echo $data['jenis_kelamin'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Keluhan</label>
				<div class="col-md-5">
					<textarea name="" id="" cols="10" rows="5" readonly="" class="form-control input-sm"><?php echo $data['diagnosa'] ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-2">Dokter Menangani</label>
				<div class="col-md-5">
					<input type="text" class="form-control input-sm" readonly="" value="<?php echo $data['dokter'] ?>">
				</div>
			</div>
		</form>
		<hr>
		<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<th>Nama Obat</th>
					<th>Jenis Obat</th>
					<th>Jumlah</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while($row = mysqli_fetch_array($query1)){
				?>
				<tr>
					<td><?php echo $row['nama_obat'] ?></td>
					<td><?php echo $row['jenis_obat'] ?></td>
					<td><?php echo $row['jumlah'] ?></td>
					<td><?php echo $row['keterangan'] ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>