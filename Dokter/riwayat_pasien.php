<?php
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysqli_query($con, "SELECT * FROM pasien WHERE id_pasien='$id'");
	$data = mysqli_fetch_array($query);
}
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Riwayat Penyakit <?php echo $data['nama']; ?></h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-md-2">Nama</label>
				<div class="col-md-5">
					<input type="text" value="<?php echo $data['nama']; ?>" readonly class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2">Jenis Kelamin</label>
				<div class="col-md-5">
					<input type="text" value="<?php echo $data['jenis_kelamin']; ?>" readonly class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2">Tempat, Tanggal Lahir</label>
				<div class="col-md-5">
					<input type="text" value="<?php echo $data['tanggal_lahir']; ?>" readonly class="form-control">
				</div>
			</div>
		</form>

		<a href="?page=tambah_diagnosis&id=<?php echo $data['id_pasien']; ?>" class="btn btn-sm btn-primary">Tambah Diagnosis</a>
		<br>
		<br>
		<table class="table table-bordered table-responsive" id="myTable">
			<thead>
				<tr>
					<th>Tanggal</th>
					<th>Dokter</th>
					<th>Keluhan</th>
					<th>Obat</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query3 = mysqli_query($con, "SELECT * FROM diagnosis WHERE id_pasien='$data[id_pasien]'");
				while ($data3 = mysqli_fetch_array($query3)) {
				?>
				<tr>
					<td><?php echo $data3['tanggal'] ?></td>
					<td><?php echo $data3['dokter'] ?></td>
					<td><?php echo $data3['diagnosa'] ?></td>
					<td><?php echo $data3['obat'] ?></td>
				</tr>
				<?php 
				} 
				?>
			</tbody>
		</table>
	</div>
</div>