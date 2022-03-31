<?php 
include '../koneksi.php';
$id_siswa = $_GET['id_siswa'];
mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id_siswa='$id_siswa'")or die(mysql_error());
 
// redirect to input.php
header("location:../siswa.php");
?>