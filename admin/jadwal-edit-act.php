<?php 
include 'koneksi.php';
$id  = $_POST['id'];
$kursus  = $_POST['kursus'];
$waktu_kursus  = $_POST['waktu_kursus'];

$cek = mysqli_query($koneksi, "UPDATE tb_jadwal set 
                            kursus_id = '$kursus',
                            waktu_kursus = '$waktu_kursus' WHERE id_jadwal='$id'");

    if($cek){
        echo "<script>alert('Data berhasil diedit'); window.location.href = 'jadwal.php'</script>";
    }
?>