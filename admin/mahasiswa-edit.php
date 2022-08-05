<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Edit Data Mahasiswa</h4>
    </div>
        <div class="card-body">
        <?php 
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_mahasiswa where id_mahasiswa='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
            <form method="post" action="mahasiswa-edit-act.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>NPM</label>
                    <input type="hidden" name="id" value="<?php echo $d['id_mahasiswa'] ?>">
                    <input type="text" class="form-control" name="npm" required="required"
                    value="<?php echo $d['npm']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mahasiswa" required="required"
                    value="<?php echo $d['nama_mahasiswa']; ?>">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="kelas" required="required"
                    value="<?php echo $d['kelas']; ?>">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" required="required"
                    value="<?php echo $d['username']; ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" required="required"
                    value="<?php echo $d['password']; ?>">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-icon-split" name="submit">
                    <span class="text">Edit</span>
                </button>
            </form>
            <?php 
        }
        ?>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?php 
    include 'template/footer.php';
?>