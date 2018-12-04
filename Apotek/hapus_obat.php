<?php 
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	mysqli_query($con, "DELETE FROM data_obat WHERE id_obat='$id'");
	echo "<meta http-equiv='refresh' content='1;url=?page=obat'>";
}