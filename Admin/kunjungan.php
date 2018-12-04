<?php
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysqli_query($con, "SELECT * FROM pasien WHERE id_pasien='$id'");
	$data = mysqli_fetch_array($query);
}
?>