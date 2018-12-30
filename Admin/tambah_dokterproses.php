<?php 
if(isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$user_name = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "INSERT INTO user SET nama='$nama', user_name='$user_name', password='$password', level='Dokter'";
	mysqli_query($con, $query);
	echo "<meta http-equiv='refresh' content='1;url=?page=dokter'>";
}