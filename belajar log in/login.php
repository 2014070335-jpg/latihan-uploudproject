<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <form method="POST" action="">
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" placeholder="username" required></td>
      </tr>
      <tr>
        <td>Masukkan Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="Password" required></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><button type="submit" name="login">Login</button></td>
      </tr>
    </table>
  </form>
  <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

  <?php
  if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $hasil = mysqli_query($koneksi, $query);
      $cek = mysqli_num_rows($hasil);

      if ($cek > 0) {
          echo "<script>alert('Login berhasil!');</script>";
      } else {
          echo "<script>alert('Username atau password salah!');</script>";
      }
  }
  ?>
</body>
</html>


    
