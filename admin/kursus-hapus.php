<?php 
include 'koneksi.php';
$id = $_GET['id'];

$cek = mysqli_query($koneksi, "DELETE from tb_kursus where id_kursus ='$id'");

    if($cek){
            echo "<script>alert('Data berhasil dihapus'); window.location.href = 'kursus.php'</script>";
        }
