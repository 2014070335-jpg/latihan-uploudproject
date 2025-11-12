<?php
$koneksi = mysqli_connect("localhost", "root", "mysql", "db_mahasiswa");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

