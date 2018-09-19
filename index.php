<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location: Login.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ta3</title>
  </head>
  <body>
    <?php
    echo "Hi, " . $_SESSION['username'];
    ?>
    <br>
    <a href="logout.php">Logout</a>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="text" name="nama" placeholder="Nama" class="">
      <input type="text" name="nim" placeholder="NIM" class="">
      <select class="" name="fakultas" required>
        <option value="">-- Fakultas --</option>
        <option value="FIF">FIF</option>
        <option value="FIT">FIT</option>
        <option value="FRI">FRI</option>
        <option value="FKB">FKB</option>
        <option value="FIK">FIK</option>
        <option value="FTE">FTE</option>
        <option value="FEB">FEB</option>
       
       
      </select>
      <input type="radio" name="jk" value="laki-laki"><label for="jk">Laki-Laki</label>
      <input type="radio" name="jk" value="perempuan"><label for="jk">Perempuan</label>
      <input type="file" name="foto" id="foto" accept="image/*">
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
