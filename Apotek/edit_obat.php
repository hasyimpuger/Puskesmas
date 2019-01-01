<?php 
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = mysqli_query($con, "SELECT * FROM obat WHERE id_obat='$id'");
	$data = mysqli_fetch_array($query);
}
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>Edit Data Obat</h3>
	</div>
	<div class="panel-body">
		<br>
		<form action="?page=edit_obatproses" method="post">
			<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $data['id_obat']?>">
				<label>Nama Obat</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $data['nama_obat'] ?>">
			</div>
			<div class="form-group">
				<label>Stok</label>
				<input type="number" name="stok" class="form-control" value="<?php echo $data['stok_obat'] ?>">
			</div>
			<div class="form-group">
				<label for="">Satuan</label>
				<select name="satuan" id="" class="form-control">
					<option <?php if($data['satuan'] == "Pcs"){echo "selected"; } ?> value="Pack">Pcs</option>
					<option <?php if($data['satuan'] == "Botol"){echo "selected"; } ?> value="Botol">Botol</option>
				</select>
			</div>
			<div class="form-group">
				<label>Tanggal Expired</label>
				<input type="text" name="tanggal" class="form-control" id="date" value="<?php echo $data['expired'] ?>">
			</div>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-md btn-primary">
		</form>
	</div>
</div>