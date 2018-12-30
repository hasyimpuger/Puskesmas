<div class="panel panel-default">
    <div class="panel-heading">
        <h3>Tambah Data Kepegawaian</h3>
    </div>
    <div class="panel-body">
        <br>
        <form action="?page=tambah_dataproses" method="post">
            <div class="form-group">
                <label for="">Nama Pegawai</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Jabatan</label>
                <select name="jabatan" class="form-control">
                    <option value="Resipsionis">Resipsionis</option>
                    
                    <option value="Apoteker">Apoteker</option>
                </select>
            </div>
            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-sm"> 
        </form>
    </div>
</div>