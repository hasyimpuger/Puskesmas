<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM user WHERE id_user='$id'");
    $data = mysqli_fetch_array($query);
}
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3>Edit Data Kepegawaian</h3>
    </div>
    <div class="panel-body">
        <br>
        <form action="?page=edit_dataproses" method="post">
            <input type="hidden" value="<?php echo $data['id_user'] ?>" name="id">
            <div class="form-group">
                <label for="">Nama Pegawai</label>
                <input type="text" name="nama" class="form-control" required value="<?php echo $data['nama'] ?>">
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="user" class="form-control" required value="<?php echo $data['user_name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="pass" class="form-control" required value="<?php echo $data['password'] ?>">
            </div>
            <div class="form-group">
                <label for="">Jabatan</label>
                <select name="jabatan" class="form-control">
                    <option value="<?php echo $data['level'] ?>"><?php echo $data['level'] ?></option>
                    <option value="Resipsionis">Resipsionis</option>
                    
                    <option value="Apoteker">Apoteker</option>
                </select>
            </div>
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-sm"> 
        </form>
    </div>
</div>