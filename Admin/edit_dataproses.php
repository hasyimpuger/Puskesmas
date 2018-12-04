<?php

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $jabatan = $_POST['jabatan'];

    mysqli_query($con, "UPDATE user SET nama='$nama', user_name='$user', password='$pass', level='$jabatan' WHERE id_user='$id'");
    echo "<meta http-equiv='refresh' content='1;url=?page=data_kepegawaian'>";
}