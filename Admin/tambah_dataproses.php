<?php

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $jabatan = $_POST['jabatan'];

    mysqli_query($con, "INSERT INTO user SET nama='$nama', user_name='$user', password='$pass', level='$jabatan'");
    echo "<meta http-equiv='refresh' content='1;url=?page=data_kepegawaian'>";
}