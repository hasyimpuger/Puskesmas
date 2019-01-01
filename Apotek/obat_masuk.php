<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Obat Masuk</h3>
	</div>
	<div class="panel-body">
		<form action="?page=obat_masukproses" method="POST">
			<div class="form-group">
				<label for="obat" class="label-control">Nama Obat</label>
				<select name="obat" class="chosen-select form-control" id="">
					<option>--Pilih Obat--</option>
					<?php
					$query1 = mysqli_query($con, "SELECT * FROM obat");
					while($data1 = mysqli_fetch_array($query1)) {
						?>
						<option value="<?php echo $data1['id_obat'] ?>"><?php echo $data1['nama_obat'] ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Jumlah</label>
				<input type="number" name="jumlah" class="form-control">
			</div>
			<input type="submit" name="simpan" class="btn btn-sm btn-success" value="Simpan">
		</form>
		
		<hr>
		<table class="table table-bordered table-responsive" id="myTable">
			<thead>
				<tr>
					<th>Nama Obat</th>
					<th>Jumlah Masuk</th>
					<th>Tanggal Masuk</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = mysqli_query($con, "SELECT * FROM obat, obat_masuk WHERE obat.id_obat=obat_masuk.id_obat");
				while($data = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $data['nama_obat'] ?></td>
					<td><?php echo $data['jumlah'] ?></td>
					<td><?php echo $data['tanggal'] ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>

