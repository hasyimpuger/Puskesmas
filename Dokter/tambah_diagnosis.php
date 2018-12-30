<?php
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$no_antrian = $_GET['no_antrian'];
	$query = mysqli_query($con, "SELECT * FROM pasien WHERE id_pasien='$id'");
	$data = mysqli_fetch_array($query);

	$query2 = mysqli_query($con, "SELECT * FROM diagnosis WHERE no_antrian = '$no_antrian'");
	$data2 = mysqli_fetch_array($query2);
}

?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Tambah Diagnosis</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="?page=tambah_diagnosis_proses" method="post">
			<input type="hidden" name="no_antrian" value="<?php echo $no_antrian; ?>">
			<input type="hidden" name="id" value="<?php echo $data['id_pasien']; ?>">
			<div class="form-group">
				<label class="col-md-2">Nama</label>
				<div class="col-md-10">
					<input type="text" value="<?php echo $data['nama']; ?>" readonly class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2">Keluhan</label>
				<div class="col-md-10">
					<textarea class="form-control" name="keluhan" rows="5" ><?php echo $data2['diagnosa'] ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-2">
					<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
				</div>
			</div>
		</form>
		<br><br>
	</div>
</div>
