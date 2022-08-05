<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Tambah Kursus</h4>
    </div>
        <div class="card-body">
            <form method="post" action="kursus-tambah-act.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Kursus</label>
                    <input type="text" class="form-control" name="nama_kursus" required="required" placeholder="Masukan Nama Kursus ..">
                </div>
                <div class="form-group">
                    <label>Keterangan Kursus</label>
                    <textarea name="keterangan_kursus" class="form-control textarea" required="required" style="resize: none" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Durasi Lama Kursus</label>
                    <input type="text" class="form-control" name="durasi_kursus" required="required" placeholder="Masukan Durasi Kursus ..">
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