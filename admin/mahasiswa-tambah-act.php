<?php 
include 'koneksi.php';

$npm  = $_POST['npm'];
$nama_mahasiswa  = $_POST['nama_mahasiswa'];
$kelas  = $_POST['kelas'];
$username  = $_POST['username'];
$password  = $_POST['password'];

$cek = mysqli_query($koneksi, "INSERT into tb_mahasiswa VALUES (
                        NULL,
                        '$npm',
                        '$nama_mahasiswa',
                        '$kelas',
                        '$username',
                        '$password'
                        )");
    if($cek){
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href = 'mahasiswa.php'</script>";
    }
