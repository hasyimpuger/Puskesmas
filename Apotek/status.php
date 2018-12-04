<?php
if(isset($_GET['id'])) {
	$id = $_GET['id'];

	$query = "UPDATE pendaftaran SET status='Selesai' WHERE id_pendaftaran='$id'";
	mysqli_query($con, $query);
	echo "<meta http-equiv='refresh' content='1;url=?page=antrian'>";
}