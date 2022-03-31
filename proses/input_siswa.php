<?php
    include '../koneksi.php';

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    // input data ke database
    mysqli_query($koneksi,"insert into tb_siswa values('','$nama', '$kelas')")or die(mysql_error());

    // redirect to input.php
    header("location:../siswa.php");
?>