
<!DOCTYPE html>
<html>
<head>
	<title>Kartu Antrian</title>
</head>
<body>
	<center>
		<h2>RIWAYAT KUNJUNGA</h2>
		
	</center>
 
	<table class="table table-responsive table-bordered" id="">
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
				$query = mysqli_query($con, "SELECT * FROM diagnosis, pasien where diagnosis.id_pasien=pasien.id_pasien");
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
	<script>
		window.print();
	</script>
	
</body>
</html>