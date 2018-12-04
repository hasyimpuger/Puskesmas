<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Antrian Pasien</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered" id="myTable">
			<thead>
				<tr>
					<th>No. Antrian</th>
					<th>Nama</th>
					<th width="30%">Aksi</th>
				</tr>
			</thead>
			<tbody>
		<?php
		$query = mysqli_query($con, "SELECT * FROM pendaftaran");
		while($data = mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $data['no_antrian'] ?></td>
			<td>
				<?php
				$query2 = mysqli_query($con, "SELECT * FROM pasien WHERE id_pasien = '$data[id_pasien]'");
				while($data2 = mysqli_fetch_array($query2)) {
				echo $data2['nama'];
				}
				?>
			</td>
			<td>
				<?php if($data['status'] == "Selesai") {
					echo "Selesai";
				 } else { ?>
				 <a href="?page=obatpasien&id=<?php echo $data['id_pasien']; ?>" class="btn btn-sm btn-info">Obat Pasien</a>
				<a href="?page=status&id=<?php echo $data['id_pendaftaran']; ?>" class="btn btn-sm btn-success">Selesai</a> 
			<?php } ?>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>
	</div>
</div>