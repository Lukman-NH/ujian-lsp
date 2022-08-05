<?php 
include 'koneksi.php';
$nama_kursus  = $_POST['nama_kursus'];
$keterangan_kursus  = $_POST['keterangan_kursus'];
$durasi_kursus  = $_POST['durasi_kursus'];

$cek = mysqli_query($koneksi, "INSERT into tb_kursus VALUES (
                        NULL,
                        '$nama_kursus',
                        '$keterangan_kursus',
                        '$durasi_kursus'
                        )");
    if($cek){
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href = 'kursus.php'</script>";
    }
