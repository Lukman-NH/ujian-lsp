<?php 
include 'koneksi.php';
$nama_kursus  = $_POST['nama_kursus'];
$waktu_kursus  = $_POST['waktu_kursus'];

$cek = mysqli_query($koneksi, "INSERT into tb_jadwal VALUES (
                        NULL,
                        '$nama_kursus',
                        '$waktu_kursus'
                        )");
    if($cek){
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href = 'jadwal.php'</script>";
    }
