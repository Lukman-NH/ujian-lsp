<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus Universitas Jewepe</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light py-3 px-3 shadow-sm" style="background-color: #FFFFFF;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
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
        <a class="btn btn-primary" href="login.php">Login Peserta</a>
        </span>
    </div>
    </nav>
    <!-- end of navbar -->

    <!-- title Head -->
    <!-- end of title head -->

    <!-- content -->
       <div class="row mx-4 mt-4 justify-content-between">
            <div class="col-12">
                <h3>List Kursus Universitas Jewepe</h3>
                <hr>
        
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Kursus</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Durasi Kursus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include 'functions.php';
                        $data = mysqli_query($conn,"SELECT * FROM tb_kursus
                                                    order by id_kursus desc");
                        while($d = mysqli_fetch_array($data)){
                            ?>
                        <tr>
                            <th><?php echo $d['nama_kursus']; ?></th>
                            <td><?php echo $d['keterangan_kursus']; ?></td>
                            <td><?php echo $d['durasi_kursus']; ?></td>
                        </tr>
                        <?php
                                        }
                                        ?>
                    </tbody>
                </table>       
            </div>
           
       </div> 
    <!-- end of content -->


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>