<?php
    include '../koneksi.php';

    $siswa = $_POST['siswa'];
    $kriteria1 = $_POST['kriteria1'];
    $kriteria2 = $_POST['kriteria2'];
    $kriteria3 = $_POST['kriteria3'];
    $kriteria4 = $_POST['kriteria4'];

    // input data ke database
    mysqli_query($koneksi,"insert into tb_matrik values('','$siswa', '$kriteria1', '$kriteria2', '$kriteria3', '$kriteria4')")or die(mysql_error());

    // redirect to input.php
    header("location:../nilai.php");
?>