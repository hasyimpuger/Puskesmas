<?php 

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM pendaftaran WHERE id_pendaftaran='$id'");
    echo "<meta http-equiv='refresh' content='1;url=?page=antrian'>";
}