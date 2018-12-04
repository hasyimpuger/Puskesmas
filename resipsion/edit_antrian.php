<?php
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query1 = mysqli_query($con, "SELECT * FROM pendaftaran WHERE id_pendaftaran='$id'");
	$data1 = mysqli_fetch_array($query1);
}

$query = mysqli_query($con, "SELECT * FROM pasien WHERE id_pasien='$data1[id_pasien]'");
$data = mysqli_fetch_array($query);
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Tambah Antrian Baru</h3>
	</div>
	<div class="panel-body">
		<form action="?page=edit_antrianproses" method="post">
            <input type="hidden" value="<?php echo $data1['id_pendaftaran'] ?>" name="id_pendaftaran">
			<div class="form-group">
				<label>No Antrian</label>
				<input type="text" name="no_antrian" class="form-control" readonly="" value="<?php echo $data1['no_antrian'] ?>">
			</div>
			<div class="form-group">
				<label>Nama Pasien</label>
				<input type="hidden" name="id" value="<?php echo $data['id_pasien']; ?>">
				<input type="text" name="nama" class="form-control" readonly="" value="<?php echo $data['nama'] ?>">
			</div>
			<div class="form-group">
				<label>Dokter yang Menangani</label>
				<select class="form-control" name="dokter">
				<?php 
				$query2 = mysqli_query($con, "SELECT * FROM user WHERE level='Dokter'");
				while($data2 = mysqli_fetch_array($query2)){
				?>
					<option value="<?php echo $data2['id_user'] ?>"><?php echo $data2['nama'] ?></option>
				<?php
				}
				?>
				</select>
			</div>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-md btn-primary">
		</form>
	</div>
</div>