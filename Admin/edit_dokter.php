<?php
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = mysqli_query($con, "SELECT * FROM user WHERE id_user='$id'");
	$data = mysqli_fetch_array($query);
}
	
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Edit Dokter</h3>
	</div>
	<div class="panel-body">
		<br>
		<form method="post" action="">
			<input type="hidden" name="id" value="<?php echo $data['id_user'] ?>">
			<div class="form-group">
				<label>Nama Dokter</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
			</div>
			
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $data['user_name'] ?>">
			</div>
			
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $data['password'] ?>">
			</div>
			
			<input type="submit" name="simpan" value="Simpan" class="btn btn-md btn-primary">
		
			
		</form>
	</div>
</div>


<?php
if(isset($_POST['simpan'])) {
	
	mysqli_query($con, "UPDATE user SET 
	nama='$_POST[nama]', 
	user_name='$_POST[username]', 
	password='$_POST[password]' 
	WHERE id_user='$_GET[id]'");
	echo "<meta http-equiv='refresh' content='1;url=?page=dokter'>";
}
?>