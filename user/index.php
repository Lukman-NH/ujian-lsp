<?php
session_start();

require '../functions.php';
$datakursus = query("SELECT * FROM tb_kursus");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus Universitas Jewepe</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light py-3 px-3 shadow-sm" style="background-color: #FFFFFF;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
             Kursus Universitas Jewepe
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li> -->
            <!-- <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li> -->
        </ul>      
            <a class="btn btn-danger" href="logout.php">Logout</a>    
        </div>
    </div>
    </nav>
    <!-- end of navbar -->

    <!-- content -->
       <div class="row mx-4 mt-4 justify-content-between">
            <div class="col-12">
                <h4>Silahkan Pilih Kursus</h4>
                <hr>
                <?php
                // cek tombol submit
                if( isset($_POST["submit"]) ) {
                    // cek insert
                    if( tambahpendaftaran($_POST) > 0 ) { 
                        echo "
                            <script>
                                alert('data berhasil ditambahkan!');
                                document.location.href='index.php';
                            </script>
                        ";
                    } else {
                    echo mysqli_error($conn);
                    echo "<br>";
                    echo var_dump(mysqli_affected_rows($conn));

                        // echo "
                        // <script>
                        //     alert('data gagal ditambahkan!');
                        //     document.location.href='kelola_wisata.php';
                        // </script>
                        // ";
                    }
                }

                ?>
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_mahasiswa" value="<?= $_SESSION["id_mahasiswa"]; ?>">
                <!-- <div class="form-group row justify-content-start">
                    <label for="nama_mahasiswa" class="col-sm-3 col-form-label">Nama Mahasiswa</label> 
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" required autocomplete="off">
                    </div>
                </div> -->

                <div class="form-group row justify-content-start">
                    <label for="id_kursus" class="col-sm-3 col-form-label">Kursus</label>
                    <div class="col-sm-12">
                        <select class="form-control" name="id_kursus" id="id_kursus">
                        <?php foreach( $datakursus as $row ) : ?>
                        <option value="<?= $row["id_kursus"]; ?><"><?= $row["nama_kursus"]; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>              
               <br>
                <div class="form-group row justify-content-start">
                    <label for="pdf" class="col-sm-3 col-form-label">Upload KRS</label>
                    <div class="col-sm-12">
                        <input type="file" class="form-control-file" name="pdf" id="pdf" required autocomplete="off">
                    </div>
                </div>
                <br>
                <hr>
                <div class="form-group row justify-content-start">
                    <div class="col-sm-9">
                        <button type="submit" name="submit" class="btn btn-primary" style="width: 15%;">Upload</button>
                    </div>
                </div>
                </form>
                </div>
                </div>
            </div>
           
       </div> 
    <!-- end of content -->


    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>