
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>Laporan Kunjungan</h3>
	</div>
	<div class="panel-body">
		
		<br>
		<br>
		<table class="table table-responsive table-bordered" id="myTable">
			<thead>
			
				<tr>
					<th>Tanggal Berobat</th>
					<th>Nama Pasien</th>
					<th>Dokter</th>
					<th>Obat</th>
					
					
				</tr>
			</thead>
			<tbody>
				<?php 
				$query = mysqli_query($con, "SELECT * FROM diagnosis, pasien where diagnosis.id_pasien=pasien.id_pasien  ");
				while($data = mysqli_fetch_array($query))
				
				
				{
				?>
				<tr>
					<td><?= $data['tanggal'] ?></td>
					<td><?= $data['nama'] ?></td>
					<td><?= $data['dokter'] ?></td>
					<td><?= $data['obat'] ?></td>
					
					
				</tr>
				<?php
				}
				
				?>
				
			</tbody>
		</table>
		<a href="?page=cetak1" class="btn btn-sm btn-warning">Print</a>
	</div>
</div>



