<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Tambah Data Mahasiswa</h4>
    </div>
        <div class="card-body">
            <form method="post" action="mahasiswa-tambah-act.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>NPM</label>
                    <input type="text" class="form-control" name="npm" required="required">
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mahasiswa" required="required">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" required="required">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" required="required">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" required="required">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-icon-split" name="submit">
                    <span class="text">Tambah</span>
                </button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?php 
    include 'template/footer.php';
?>