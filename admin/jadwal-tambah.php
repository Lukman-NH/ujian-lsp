<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Tambah Jadwal Kursus</h4>
    </div>
        <div class="card-body">
            <form method="post" action="jadwal-tambah-act.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama_kursus">Nama Kursus</label>
                    <select name="nama_kursus" required="required" class="form-control">
                        <option value="">- Pilih Kursus -</option>
                        <?php 
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi,"SELECT * FROM tb_kursus");
                        while($d = mysqli_fetch_array($data)){
                            ?>
                            <option value="<?php echo $d['id_kursus']; ?>"><?php echo $d['nama_kursus']; ?></option>
                            <?php 
                        }
                        ?>
                    </select>   
                </div>  
                <div class="form-group">
                    <label>Waktu Mulai Kursus</label>
                    <input type="text" class="form-control" name="waktu_kursus" required="required" >
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