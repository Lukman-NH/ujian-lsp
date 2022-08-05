<?php 
include 'koneksi.php';
$id  = $_POST['id'];
$npm  = $_POST['npm'];
$nama_mahasiswa  = $_POST['nama_mahasiswa'];
$kelas  = $_POST['kelas'];
$username  = $_POST['username'];
$password  = $_POST['password'];

$cek = mysqli_query($koneksi, "UPDATE tb_mahasiswa set 
                            npm = '$npm',
                            nama_mahasiswa = '$nama_mahasiswa',
                            kelas = '$kelas',
                            username = '$username',
                            password = '$password' WHERE id_mahasiswa='$id'");

    if($cek){
        echo "<script>alert('Data berhasil diedit'); window.location.href = 'mahasiswa.php'</script>";
    }
