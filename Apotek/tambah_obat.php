<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>Tambah Data Obat</h3>
	</div>
	<div class="panel-body">
		<br>
		<form action="?page=tambah_obatproses" method="post">
			<div class="form-group">
				<label>Nama Obat</label>
				<input type="text" name="nama" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Stok</label>
				<input type="number" name="stok" class="form-control" required="">
			</div>
			<div class="form-group">
				<label for="">Satuan</label>
				<select name="satuan" id="" class="form-control" required="">
					<option value="">--Pilih Satuan--</option>
					<option value="Pack">Pcs</option>
					<option value="Botol">Botol</option>
				</select>
			</div>
			<div class="form-group">
				<label>Tanggal Expired</label>
				<input type="text" name="tanggal" class="form-control" id="date" required="">
			</div>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-md btn-primary">
		</form>
	</div>
</div>