<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Tambah Data Pasien</h3>
	</div>
	<div class="panel-body">
		<br>
		<form method="post" action="?page=tambah_pasienproses">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>No Telepon/HP</label>
				<input type="text" name="no_hp" class="form-control">
			</div>
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="text" name="tanggal" class="form-control" id="date">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label><br>
				<input type="radio" name="jkelamin" value="Laki-laki"> Laki-laki
				<input type="radio" name="jkelamin" value="Perempuan"> Perempuan
			</div>
			<div class="form-group">
				<label>Agama</label>
				<select name="agama" class="form-control">
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