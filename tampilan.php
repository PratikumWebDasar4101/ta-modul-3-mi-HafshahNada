<?php
session_start();
include("koneksi.php");

$sql = "SELECT * from tb_mahasiswa";
$result = mysqli_query($is_connection_success, $sql);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
  while ($row = mysqli_fetch_array($result)) {
    echo "<br><img width='200px' src='upload/". $row["File_gbr"] ."'>";
  }
}
?>