<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>Data Pasien</h3>
	</div>
	<div class="panel-body">
		
		<br>
		<br>
		<table class="table table-responsive table-bordered" id="myTable">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No Hp/Telepon</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					
				</tr>
			</thead>
			<tbody>
				<?php 
				$query = mysqli_query($con, "SELECT * FROM pasien");
				while($data = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?= $data['nama'] ?></td>
					<td><?= $data['alamat'] ?></td>
					<td><?= $data['no_hp'] ?></td>
					<td><?= $data['tanggal_lahir'] ?></td>
					<td><?= $data['jenis_kelamin'] ?></td>
					<td><?= $data['agama'] ?></td>
					
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>
