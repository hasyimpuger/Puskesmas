<?php
if(isset($_GET['id'])) {
	$id = $_GET['id'];
}


$query1 = mysqli_query($con, "SELECT * FROM pasien, pendaftaran WHERE pasien.id_pasien=pendaftaran.id_pasien AND pendaftaran.id_pendaftaran='$id'");

$data1 = mysqli_fetch_array($query1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kartu Antrian</title>
</head>
<body>
 
	<center>
		<h4>KARTU ANTRIAN PASIEN</h4>
		
	</center>
 
	<br/>
			<form method="post" action="">
			
			<div class="form-group">
				<label>No. Antrian</label>
				<input type="text" name="id" class="form-control" value="<?php echo $data1['no_antrian'] ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $data1['nama'] ?>">
				
			</div>
		</form>
	
	<script>
		window.print();
	</script>
	
</body>
</html>