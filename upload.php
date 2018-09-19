<?php
session_start();
include("koneksi.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$fakultas = $_POST["fakultas"];
$jk = $_POST["jk"];

$dir = "upload/";
$nama_file = $_FILES["foto"]["name"];
$nama_file_tmp = $_FILES["foto"]["tmp_name"];
$target = $dir . $nama_file;

$sql = "INSERT into tb_mahasiswa values('$nim','$nama','$fakultas','$jk','$nama_file')";

if (mysqli_query($is_connection_success, $sql) && move_uploaded_file($nama_file_tmp, $target)) {
  echo "Berhasil Upload <br><a href='tampilan.php'>Lihat Foto</a>";
}else {
  echo "Gagal";
}
?>
