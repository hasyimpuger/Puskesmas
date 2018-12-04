<?php
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = mysqli_query($con, "SELECT * FROM pasien WHERE id_pasien='$id'");
	$data = mysqli_fetch_array($query);
}
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Tambah Diagnosis</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" action="?page=tambah_diagnosis_proses" method="post">
			<input type="hidden" name="id" value="<?php echo $data['id_pasien']; ?>">
			<div class="form-group">
				<label class="col-md-2">Nama</label>
				<div class="col-md-5">
					<input type="text" value="<?php echo $data['nama']; ?>" readonly class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2">Keluhan</label>
				<div class="col-md-5">
					<textarea class="form-control" name="keluhan"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2">Obat</label>
				<div class="col-md-5">
					<textarea class="form-control" name="obat"></textarea>
				</div>
			</div>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-info">
		</form>
	</div>
</div>