<?php
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = mysqli_query($con, "SELECT * FROM pasien WHERE id_pasien='$id'");
	$data = mysqli_fetch_array($query);
}
	
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Tambah Data Pasien</h3>
	</div>
	<div class="panel-body">
		<br>
		<form method="post" action="?page=edit_pasienproses">
			<input type="hidden" name="id" value="<?php echo $data['id_pasien'] ?>">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" class="form-control"><?php echo $data['alamat'] ?></textarea>
			</div>
			<div class="form-group">
				<label>No Telepon/HP</label>
				<input type="text" name="no_hp" class="form-control" value="<?php echo $data['no_hp'] ?>">
			</div>
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="text" name="tanggal" class="form-control" id="date" value="<?php echo $data['tanggal_lahir'] ?>">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label><br>
				<input type="radio" name="jkelamin" value="Laki-laki"<?php if($data['jenis_kelamin'] == "Laki-laki"){echo "checked";} ?>/> Laki-laki
				<input type="radio" name="jkelamin" value="Perempuan"<?php if($data['jenis_kelamin'] == "Perempuan"){echo "checked";} ?>/> Perempuan
			</div>
			<div class="form-group">
				<label>Agama</label>
				<select name="agama" class="form-control">
					<option value="<?php echo $data['agama'] ?>"><?php echo $data['agama'] ?></option>
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Katolik">Katolik</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
					<option value="Lainnya">Lainnya</option>
				</select>
			</div>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-md btn-primary">
		</form>
	</div>
</div>