<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "Data_Mahasiswa";
$is_connection_success = mysqli_connect($host, $username, $password);
if ($is_connection_success) {
  $is_database_selected = mysqli_select_db($is_connection_success, $database);
  if (!$is_database_selected) {
  	echo "gagal";
  }
} else {
  echo "gagal 2";
}
?>
