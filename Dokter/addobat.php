<?php
if(isset($_GET['no_antrian'])) {
	$no_antrian = $_GET['no_antrian'];

	$query2 = mysqli_query($con, "SELECT * FROM diagnosis, pasien WHERE pasien.id_pasien=diagnosis.id_pasien AND diagnosis.no_antrian='$no_antrian'");
	$data = mysqli_fetch_array($query2);
}
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Obat</h3>
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
		</form>
		<hr>
		<form method="post">
			<input type="hidden" name="id" value="<?php echo $data['id_pasien']; ?>">
			<div class="form-group">
				<label class="label-control col-md-3" for="obat">Nama Obat</label>
				<div class="col-md-3">
					<select name="obat" id="" class="chosen-select form-control">
						<option value="">--Pilih Obat---</option>
						<?php
						$query = mysqli_query($con, "SELECT * FROM obat");
						while($row = mysqli_fetch_array($query)) {
							?>
							<option value="<?php echo $row['nama_obat'] ?>"><?php echo $row['nama_obat'] ?></option>
							<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="label-control col-md-3">Jenis Obat</label>
				<div class="col-md-3">
					<select name="jenis" id="" class="form-control">
						<option value="">--Pilih Jenis---</option>
						<option value="Tablet">Tablet</option>
						<option value="Pil">Pil</option>
						<option value="Puyer">Puyer</option>
					</select>
				</div>
			</div>
			<div class="col-md-12"></div>
			<div class="form-group">
				<label for="" class="label-control col-md-3">Jumlah</label>
				<div class="col-md-3">
					<input type="text" name="jumlah" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="label-control col-md-3">Keterangan</label>
				<div class="col-md-3">
					<input type="text" name="keterangan" class="form-control" required="">
				</div>
			</div>
			<input type="submit" name="addobat" value="ADD OBAT" class="btn btn-sm btn-primary">
			<button type="button" class="btn btn-md btn-primary" onclick="window.open('resep.php?no_antrian=<?php echo $no_antrian; ?>','mywindow','width=600, height=400')"><i class="fa fa-print fa-fw"></i> Cetak</button>
		</form>
<?php

if(isset($_POST['addobat'])) {
	// $no_antrian = $_POST['no_antrian'];
	$id = $_POST["id"];
	$obat = $_POST['obat'];
	$jenis = $_POST['jenis'];
	$jumlah = $_POST['jumlah'];
	$ket = $_POST['keterangan'];

	$query5 = mysqli_query($con, "SELECT * FROM obat WHERE = '$obat'");
	$data2 = mysqli_fetch_array($query5);
	if($data2["stok_obat"] == 0) {
		echo "<script>alert('Stok Obat Habis')</script>";
	} else {
		mysqli_query($con, "INSERT INTO resep SET no_antrian = '$no_antrian', nama_obat = '$obat', jenis_obat = '$jenis', jumlah = '$jumlah', keterangan = '$ket'");
		echo "<meta http-equiv = 'refresh' content = '1;url=?page=addobat&id=".$id."&no_antrian=".$no_antrian."'>";
	}
}
?>
		<br>
		<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<th>Nama Obat</th>
					<th>Jenis Obat</th>
					<th>Jumlah</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query1 = mysqli_query($con, "SELECT * FROM resep WHERE no_antrian = '$no_antrian'");
				while ($row1 = mysqli_fetch_array($query1)) {
					?>
					<tr>
						<td><?php echo $row1['nama_obat'] ?></td>
						<td><?php echo $row1['jenis_obat'] ?></td>
						<td><?php echo $row1['jumlah'] ?></td>
						<td><?php echo $row1['keterangan'] ?></td>
						<td>
							<a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>