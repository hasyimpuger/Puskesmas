<head>
	<title>POST DATA</title>
</head>
<?php
include 'koneksi.php'; 
session_start();
if(isset($_POST['simpan'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$query = mysqli_query($con, "SELECT * FROM user WHERE user_name='$user' AND password='$pass'");
	$result = mysqli_num_rows($query);
	$data = mysqli_fetch_array($query);
	if($result>0){
		if($data['level'] == "Dokter") {
			$_SESSION['nama']=$data['nama'];
			$_SESSION['username']=$data['user_name'];
			$_SESSION['password']=$data['password'];
			$_SESSION['level']=$data['level'];

			echo "<meta http-equiv='refresh' content='1; url=Dokter/home.php'>";
		} elseif($data['level'] == "Apoteker") {
			$_SESSION['nama']=$data['nama'];
			$_SESSION['username']=$data['user_name'];
			$_SESSION['password']=$data['password'];
			$_SESSION['level']=$data['level'];

			echo "<meta http-equiv='refresh' content='1; url=Apotek/home.php'>";
		} elseif ($data['level'] == "Resipsionis") {
			$_SESSION['nama']=$data['nama'];
			$_SESSION['username']=$data['user_name'];
			$_SESSION['password']=$data['password'];
			$_SESSION['level']=$data['level'];

			echo "<meta http-equiv='refresh' content='1; url=resipsion/home.php'>";
		} elseif($data['level'] == "Administrator") {
			$_SESSION['nama']=$data['nama'];
			$_SESSION['username']=$data['user_name'];
			$_SESSION['password']=$data['password'];
			$_SESSION['level']=$data['level'];

			echo "<meta http-equiv='refresh' content='1; url=Admin/home.php'>";
		}
		
	} else{
		echo "<meta http-equiv='refresh' content='1; url=index.php'>";
	}
}