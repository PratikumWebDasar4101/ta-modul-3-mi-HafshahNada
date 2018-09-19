<?php
session_start();
if(isset($_SESSION['username'])){ 
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form action="Login.php" method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="submit" value="Login">
    </form>
    <a href="Signup.php">Signup!</a>
  </body>
</html>
<?php
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  if($username == "admin" && $password == 123) {
      $_SESSION['username'] = $_POST['username'];
    header('location: index.php');
  } else {
    echo "<script>alert(\"Username Atau Password Salah!\")</script>";
  }
}
?>
