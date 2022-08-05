<?php 
include 'koneksi.php';
$id  = $_POST['id'];
$nama_kursus  = $_POST['nama_kursus'];
$keterangan_kursus  = $_POST['keterangan_kursus'];
$durasi_kursus  = $_POST['durasi_kursus'];

$cek = mysqli_query($koneksi, "UPDATE tb_kursus set 
                            nama_kursus = '$nama_kursus',
                            keterangan_kursus = '$keterangan_kursus',
                            durasi_kursus = '$durasi_kursus' WHERE id_kursus='$id'");

    if($cek){
        echo "<script>alert('Data berhasil diedit'); window.location.href = 'kursus.php'</script>";
    }
