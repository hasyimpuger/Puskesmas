
<?php 
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	mysqli_query($con, "DELETE FROM user WHERE id_user='$id'");
	echo "<meta http-equiv='refresh' content='1;url=?page=dokter'>";
}	
?>
	
	