<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Edit Jadwal Kursus</h4>
    </div>
        <div class="card-body">
        <?php 
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from tb_jadwal where id_jadwal='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>

            <form method="post" action="jadwal-edit-act.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="kursus">Nama Kursus</label>
                    <input type="hidden" name="id" value="<?php echo $d['id_jadwal']; ?>">
                    <select name="kursus" class="form-control">
                        <option value="">- Pilih Kursus -</option>
                        <?php 
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi,"SELECT * FROM tb_kursus");
                        while($b = mysqli_fetch_array($data)){
                            ?>
                            <option <?php if($b['id_kursus'] == $d['kursus_id']){echo "selected='selected'";} ?> 
                            value="<?php echo $b['id_kursus']; ?>"><?php echo $b['nama_kursus']; ?></option>
                            <?php 
                        }
                        ?>
                    </select>    
                </div>  
                <div class="form-group">
                    <label>Waktu Mulai Kursus</label>
                    <input type="text" class="form-control" name="waktu_kursus" required="required" 
                    value="<?php echo $d['waktu_kursus']; ?>">
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