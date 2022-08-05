<?php 
    include 'template/header.php';

    require '../functions.php';
    $datapendaftaran = query("SELECT * FROM tb_pendaftaran_kursus INNER JOIN 
    tb_mahasiswa ON tb_pendaftaran_kursus.id_mahasiswa = tb_mahasiswa.id_mahasiswa
    INNER JOIN tb_kursus On tb_pendaftaran_kursus.id_kursus = tb_kursus.id_kursus");
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Jadwal Kursus</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="1%">ID</th>
                                            <th>Mahasiswa</th>
                                            <th>Kursus</th>
                                            <th>KRS</th>
                                            <th>Status</th>
                                            <th class="text-center" width="12%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php foreach( $datapendaftaran as $row ) : ?>
                                       <tr>
                                            <td>
                                                <?= $row["id_pendaftaran_kursus"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["nama_mahasiswa"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["nama_kursus"]; ?> 
                                            </td>
                                            <td>
                                                <?= $row["krs"]; ?> 
                                            </td>
                                            <td>
                                                <?php
                                                    if ($row["verifikasi"] == 0 ) {
                                                        echo "<p> Belum Terverifikasi </p>";
                                                    } else {
                                                        echo "<p> Terverifikasi </p>";
                                                    }
                                                ?>
                                        
                                            </td>
                                            <td>
                                            <?php
                                                    if ($row["verifikasi"] == 0 ) {
                                                        $id_pendaftaran=$row["id_pendaftaran_kursus"];                                    
                                                        echo "<a href='./verify.php?id_pendaftaran_kursus=$row[id_pendaftaran_kursus]' class='btn btn-warning'>Terima</a>";
                                                    } else {
                                                        echo "<span class='btn btn-success'>Diterima</span>";
                                                    }
                                                ?>                            
                                            
                                            </td>
                                        </tr>
                                       
                                     <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php 
    include 'template/footer.php';
?>