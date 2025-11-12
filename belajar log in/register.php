<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
</head>
<body>
  <h2>Form Registrasi</h2>
  <form method="POST" action="">
    <table>
      <tr>
        <td>Masukkan Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Nama Lengkap" required></td>
      </tr>
      <tr>
        <td>Masukkan Username</td>
        <td>:</td>
        <td><input type="text" name="username" placeholder="Username" required></td>
      </tr>
      <tr>
        <td>Masukkan Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="Password" required></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><button type="submit" name="daftar">Daftar</button></td>
      </tr>
    </table>
  </form>
  <p>Create Account <a href="login.php">Login di sini</a></p>

  <?php
  if (isset($_POST['daftar'])) {
      $nama = $_POST['nama'];
      $username = $_POST['username'];
      $password = md5($_POST['password']); // enkripsi sederhana

      $query = "INSERT INTO users (nama, username, password) VALUES ('$nama', '$username', '$password')";
      $hasil = mysqli_query($koneksi, $query);

      if ($hasil) {
          echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location='login.php';</script>";
      } else {
          echo "<script>alert('Gagal mendaftar! Username sudah digunakan.');</script>";
      }
  }
  ?>
</body>
</html>
