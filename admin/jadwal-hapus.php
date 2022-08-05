<?php 
include 'koneksi.php';
$id = $_GET['id'];

$cek = mysqli_query($koneksi, "DELETE from tb_jadwal where id_jadwal ='$id'");

    if($cek){
            echo "<script>alert('Data berhasil dihapus'); window.location.href = 'jadwal.php'</script>";
        }
