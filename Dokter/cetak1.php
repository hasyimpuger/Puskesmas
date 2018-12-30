<?php
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = mysqli_query($con, "SELECT * FROM pasien WHERE id_pasien='$id'");
	$data = mysqli_fetch_array($query);
}

$query = mysqli_query($con, "SELECT * FROM diagnosis WHERE id_pasien='$id'");
$data1 = mysqli_fetch_array($query);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>RESEP DOKTER</title>
</head>
<body>
 
	<center>
		<h2>RESEP DOKTER</h2>
		
	</center>
 
	<br/>
			<form method="post" action="">
			
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
				<label>Doter yang menangani</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $data1['dokter'] ?>">
				<label>Obat</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $data1['obat'] ?>">
			</div>
		</form>
	
 
	<script>
		window.print();
	</script>
	
</body>
</html>