<?php
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	mysqli_query($con, "DELETE FROM pasien WHERE id_pasien='$id'");
	echo "<meta http-equiv='refresh' content='1;url=?page=pasien'>";
}