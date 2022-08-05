<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Edit Kursus</h4>
    </div>
        <div class="card-body">
        <?php 
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_kursus where id_kursus='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
            <form method="post" action="kursus-edit-act.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Kursus</label>
                    <input type="hidden" name="id" value="<?php echo $d['id_kursus'] ?>">
                    <input type="text" class="form-control" name="nama_kursus" required="required" 
                    value="<?php echo $d['nama_kursus']; ?>">
                </div>
                <div class="form-group">
                    <label>Keterangan Kursus</label>
                    <textarea name="keterangan_kursus" class="form-control textarea" required="required" style="resize: none" rows="10"><?php echo $d['keterangan_kursus']; ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Durasi Lama Kursus</label>
                    <input type="text" class="form-control" name="durasi_kursus" required="required"
                    value="<?php echo $d['durasi_kursus']; ?>">
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